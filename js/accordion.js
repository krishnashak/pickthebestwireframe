/**
 * FAQ accordion: one open item at a time, toggles content and image by data-image.
 * Depends on .faq-item, .faq-content, #faqImage.
 */
function initAccordion() {
  const items = document.querySelectorAll('.faq-item');
  const image = document.getElementById('faqImage');

  if (!items.length || !image) return;

  items.forEach((item) => {
    item.addEventListener('click', () => {
      document.querySelectorAll('.faq-content').forEach((c) => c.classList.add('hidden'));
      document.querySelectorAll('.faq-item span').forEach((s) => (s.textContent = '+'));

      item.querySelector('.faq-content').classList.remove('hidden');
      item.querySelector('span').textContent = '−';

      const newImage = item.getAttribute('data-image');
      if (newImage) image.src = newImage;
    });
  });
}
