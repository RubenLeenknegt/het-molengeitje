(() => {
  const dropdownRoot = document.querySelector('[data-dropdown-root]');

  if (!dropdownRoot) {
    return;
  }

  const dropdownToggle = dropdownRoot.querySelector('[data-dropdown-toggle]');
  const dropdownPanel = dropdownRoot.querySelector('[data-dropdown-panel]');
  const dropdownBackdrop = dropdownRoot.querySelector('[data-dropdown-backdrop]');

  if (!dropdownToggle || !dropdownPanel) {
    return;
  }

  const bodyElement = document.body;

  const isOpen = () => dropdownRoot.getAttribute('data-dropdown-open') === 'true';

  const setOpen = (open) => {
    dropdownRoot.setAttribute('data-dropdown-open', open ? 'true' : 'false');
    dropdownToggle.setAttribute('aria-expanded', open ? 'true' : 'false');
    bodyElement.classList.toggle('dropdown-is-open', open);
  };

  dropdownToggle.addEventListener('click', () => {
    setOpen(!isOpen());
  });

  if (dropdownBackdrop) {
    dropdownBackdrop.addEventListener('click', () => {
      setOpen(false);
    });
  }

  document.addEventListener('keydown', (event) => {
    if (event.key === 'Escape' && isOpen()) {
      setOpen(false);
      dropdownToggle.focus();
    }
  });

  document.addEventListener('click', (event) => {
    if (!isOpen()) {
      return;
    }

    if (!dropdownRoot.contains(event.target)) {
      setOpen(false);
    }
  });
})();

