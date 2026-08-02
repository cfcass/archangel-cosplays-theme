/**
 * Archangel Cosplays Theme
 * Main JavaScript file
 * 
 * @package Archangel_Cosplays
 * @since 1.0.0
 */

(function() {
  'use strict';

  /**
   * Mobile Menu Toggle
   */
  function initMobileMenu() {
    const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
    const siteNavigation = document.getElementById('site-navigation');

    if (!mobileMenuToggle || !siteNavigation) {
      return;
    }

    mobileMenuToggle.addEventListener('click', function() {
      siteNavigation.classList.toggle('active');
      mobileMenuToggle.setAttribute(
        'aria-expanded',
        mobileMenuToggle.getAttribute('aria-expanded') === 'true' ? 'false' : 'true'
      );
    });

    // Close menu when clicking on a link
    const navLinks = siteNavigation.querySelectorAll('a');
    navLinks.forEach(link => {
      link.addEventListener('click', function() {
        siteNavigation.classList.remove('active');
        mobileMenuToggle.setAttribute('aria-expanded', 'false');
      });
    });
  }

  /**
   * Smooth scroll behavior for anchor links
   */
  function initSmoothScroll() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function(e) {
        const href = this.getAttribute('href');
        const target = document.querySelector(href);

        if (target) {
          e.preventDefault();
          target.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
          });
        }
      });
    });
  }

  /**
   * Add active class to current menu item
   */
  function setActiveMenuItem() {
    const currentUrl = window.location.pathname;
    const navLinks = document.querySelectorAll('.nav-menu a');

    navLinks.forEach(link => {
      const href = link.getAttribute('href');
      if (href && currentUrl.includes(href)) {
        link.closest('li').classList.add('active');
      }
    });
  }

  /**
   * Gallery lightbox effect
   */
  function initGallery() {
    const galleryItems = document.querySelectorAll('.gallery-item img');

    galleryItems.forEach(img => {
      img.addEventListener('click', function() {
        const src = this.src;
        const alt = this.alt;
        const lightbox = createLightbox(src, alt);
        document.body.appendChild(lightbox);
      });
    });
  }

  /**
   * Create lightbox modal
   */
  function createLightbox(src, alt) {
    const lightbox = document.createElement('div');
    lightbox.className = 'lightbox';
    lightbox.innerHTML = `
      <div class="lightbox-content">
        <img src="${src}" alt="${alt}" />
        <button class="lightbox-close" aria-label="Close lightbox">×</button>
      </div>
    `;

    lightbox.addEventListener('click', function(e) {
      if (e.target === this || e.target.classList.contains('lightbox-close')) {
        this.remove();
      }
    });

    // Close with ESC key
    document.addEventListener('keydown', function(e) {
      if (e.key === 'Escape' && document.querySelector('.lightbox')) {
        document.querySelector('.lightbox').remove();
      }
    });

    return lightbox;
  }

  /**
   * Lazy load images
   */
  function initLazyLoad() {
    if ('IntersectionObserver' in window) {
      const imageObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            const img = entry.target;
            if (img.dataset.src) {
              img.src = img.dataset.src;
              img.removeAttribute('data-src');
            }
            imageObserver.unobserve(img);
          }
        });
      });

      document.querySelectorAll('img[data-src]').forEach(img => {
        imageObserver.observe(img);
      });
    }
  }

  /**
   * Initialize all scripts when DOM is ready
   */
  document.addEventListener('DOMContentLoaded', function() {
    initMobileMenu();
    initSmoothScroll();
    setActiveMenuItem();
    initGallery();
    initLazyLoad();
  });
})();
