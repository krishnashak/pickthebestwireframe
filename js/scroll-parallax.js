/**
 * Scroll-based parallax: fades section-1 and moves section-2 video on scroll.
 * Depends on .github-wrapper, .section-1, .section-2 video.
 */
function initScrollParallax() {
  const section1 = document.querySelector('.section-1');
  const video = document.querySelector('.section-2 video');
  const wrapper = document.querySelector('.github-wrapper');

  if (!section1 || !video || !wrapper) return;

  window.addEventListener('scroll', () => {
    const rect = wrapper.getBoundingClientRect();
    const viewportHeight = window.innerHeight;
    const progress = Math.min(Math.max(-rect.top / viewportHeight, 0), 1);

    section1.style.opacity = String(1 - progress);

    if (progress > 0) {
      video.style.transform = `translate(-50%, calc(-50% + ${progress * 80}px))`;
    }
  });
}
