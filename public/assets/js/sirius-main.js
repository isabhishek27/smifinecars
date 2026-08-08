// Sirius Motorsports Inc. - Main JS
(function(){
  // Sticky header
  const header = document.querySelector('.site-header');
  const onScroll = () => {
    if(!header) return;
    if(window.scrollY > 30) header.classList.add('scrolled');
    else header.classList.remove('scrolled');
  };
  window.addEventListener('scroll', onScroll, {passive:true});
  onScroll();

  // Mobile nav
  const toggle = document.querySelector('.nav-toggle');
  const links = document.querySelector('.nav-links');
  if(toggle && links){
    toggle.addEventListener('click', () => links.classList.toggle('open'));
    links.querySelectorAll('a').forEach(a => a.addEventListener('click', () => links.classList.remove('open')));
  }

  // Active nav link (CI paths)
  const path = (location.pathname.replace(/\/+$/, '') || '/').toLowerCase();
  document.querySelectorAll('.nav-links a').forEach(a => {
    try {
      const hrefPath = new URL(a.href, location.origin).pathname.replace(/\/+$/, '').toLowerCase();
      if (hrefPath && path === hrefPath) a.classList.add('active');
      if (hrefPath.endsWith('/smifinecars') && (path.endsWith('/smifinecars') || path.endsWith('/smifinecars/public'))) a.classList.add('active');
    } catch(e) {}
  });

  // Year
  document.querySelectorAll('[data-year]').forEach(el => el.textContent = new Date().getFullYear());

  // Enquire scroll-to + prefill
  document.querySelectorAll('[data-enquire]').forEach(btn => {
    btn.addEventListener('click', e => {
      e.preventDefault();
      const veh = btn.getAttribute('data-enquire');
      const target = document.querySelector('#enquiry');
      const field = document.querySelector('#vehicleInterest');
      if(field && veh) field.value = veh;
      if(target) target.scrollIntoView({behavior:'smooth', block:'start'});
    });
  });

  // Enquiry form submit (placeholder)
  const forms = document.querySelectorAll('form[data-form]');
  forms.forEach(form => {
    form.addEventListener('submit', e => {
      e.preventDefault();
      const success = form.querySelector('.form-success');
      if(success){ success.classList.add('show'); success.scrollIntoView({behavior:'smooth',block:'center'}); }
      form.reset();
      setTimeout(() => success && success.classList.remove('show'), 6000);
    });
  });

  // Inventory filter
  const search = document.querySelector('#invSearch');
  const status = document.querySelector('#invStatus');
  const cards = document.querySelectorAll('.vehicle-card[data-vehicle]');
  function filter(){
    const q = (search?.value || '').toLowerCase().trim();
    const s = status?.value || 'all';
    cards.forEach(c => {
      const name = c.getAttribute('data-vehicle').toLowerCase();
      const st = c.getAttribute('data-status');
      const okQ = !q || name.includes(q);
      const okS = s === 'all' || st === s;
      c.style.display = (okQ && okS) ? '' : 'none';
    });
  }
  search && search.addEventListener('input', filter);
  status && status.addEventListener('change', filter);
})();
