
document.addEventListener('DOMContentLoaded', () => {

  const tabs   = document.querySelectorAll('.menu__tab');

  function getPanels() {
    return document.querySelectorAll('.content');
  }

  function renderTab(targetId) {
    if (!targetId) return;

    const panels = getPanels();
    const validPanel = document.getElementById(targetId);

    if (!validPanel) return;

    tabs.forEach(t => t.classList.remove('menu__tab--active'));
    const activeTab = document.querySelector(`.menu__tab[data-tab="${targetId}"]`);
    if (activeTab) activeTab.classList.add('menu__tab--active');

    panels.forEach(panel => {
      panel.classList.remove('is-active');
      panel.style.display = 'none';
    });

    validPanel.style.display = 'block';
    requestAnimationFrame(() => validPanel.classList.add('is-active'));

    const mobileMenu = document.querySelector('.sv-mobile-menu');
    const hamburger  = document.querySelector('.sv-hamburger');
    if (mobileMenu) mobileMenu.classList.remove('is-open');
    if (hamburger)  hamburger.classList.remove('is-open');
  }

  tabs.forEach(tab => {
    tab.addEventListener('click', () => {
      const id = tab.dataset.tab;
      if (!id) return;

      if (window.location.hash !== '#' + id) {
        window.location.hash = id;
      } else {
        renderTab(id);
      }
    });
  });

  function loadFromHash() {
    let hash = window.location.hash.replace('#','').toLowerCase();

    if (!hash) {
      const pathSlug = window.location.pathname.replace(/^\/|\/$/g,'').toLowerCase();
      const exists = document.getElementById(pathSlug);
      if (exists) {
        hash = pathSlug;
        history.replaceState(null, null, '#' + hash);
      }
    }

    if (hash) {
      renderTab(hash);
      return;
    }

    const first = document.querySelector('.menu__tab');
    if (first) renderTab(first.dataset.tab);
  }

  loadFromHash();
  window.addEventListener('hashchange', loadFromHash);

  const hamburger = document.querySelector('.sv-hamburger');
  const mobileMenu = document.querySelector('.sv-mobile-menu');

  if (hamburger && mobileMenu) {
    hamburger.addEventListener('click', () => {
      mobileMenu.classList.toggle('is-open');
      hamburger.classList.toggle('is-open');
    });
  }

  const tooltip = document.getElementById('sv-tooltip');

  if (tooltip) {
    document.querySelectorAll('.menu__tab[data-tooltip]').forEach(tab => {

      tab.addEventListener('mouseenter', () => {
        tooltip.textContent = tab.dataset.tooltip;
        tooltip.style.opacity = '1';
      });

      tab.addEventListener('mousemove', (e) => {
        tooltip.style.left = (e.clientX + 18) + 'px';
        tooltip.style.top  = (e.clientY + 18) + 'px';
      });

      tab.addEventListener('mouseleave', () => {
        tooltip.style.opacity = '0';
      });

    });
  }

});
