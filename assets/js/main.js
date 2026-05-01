/* LogixCode – Shared JS */

// Nav scroll
const nb = document.getElementById('nb');
if (nb) window.addEventListener('scroll', () => nb.classList.toggle('sc', scrollY > 60), { passive: true });

// Hamburger
const hb = document.getElementById('hb'), nl = document.getElementById('nl');
if (hb && nl) {
  hb.addEventListener('click', () => {
    const o = hb.classList.toggle('op');
    nl.classList.toggle('op');
    hb.setAttribute('aria-expanded', o);
  });
  nl.querySelectorAll('a').forEach(a => a.addEventListener('click', () => {
    hb.classList.remove('op'); nl.classList.remove('op'); hb.setAttribute('aria-expanded', 'false');
  }));
}

// Scroll reveal
const rio = new IntersectionObserver(es => {
  es.forEach(e => { if (e.isIntersecting) { e.target.classList.add('in'); rio.unobserve(e.target); } });
}, { threshold: 0.08 });
document.querySelectorAll('.rv,.rvl,.rvr').forEach(el => rio.observe(el));

// Counter
function cnt(el, t) {
  const d = 1800, s = performance.now(), isp = t === 98;
  function f(n) {
    const p = Math.min((n - s) / d, 1), e = 1 - Math.pow(1 - p, 3);
    el.textContent = Math.floor(e * t) + (isp ? '%' : '+');
    if (p < 1) requestAnimationFrame(f);
  }
  requestAnimationFrame(f);
}
const cio = new IntersectionObserver(es => {
  es.forEach(e => { if (e.isIntersecting) { cnt(e.target, +e.target.dataset.target); cio.unobserve(e.target); } });
}, { threshold: 0.6 });
document.querySelectorAll('[data-target]').forEach(el => cio.observe(el));

// FAQ Accordion
document.querySelectorAll('.faq-q').forEach(btn => {
  btn.addEventListener('click', () => {
    const item = btn.closest('.faq-item');
    const isOpen = item.classList.contains('open');
    document.querySelectorAll('.faq-item.open').forEach(i => i.classList.remove('open'));
    if (!isOpen) item.classList.add('open');
  });
});

// Contact form
const cf = document.getElementById('contactForm');
if (cf) {
  cf.addEventListener('submit', e => {
    e.preventDefault();
    const btn = cf.querySelector('.form-submit');
    btn.textContent = 'Sending…';
    setTimeout(() => {
      btn.textContent = '✓ Message Sent!';
      btn.style.background = 'linear-gradient(135deg,#00b87a,#009966)';
      cf.reset();
      setTimeout(() => { btn.textContent = 'Send Message'; btn.style.background = ''; }, 4000);
    }, 1200);
  });
}
