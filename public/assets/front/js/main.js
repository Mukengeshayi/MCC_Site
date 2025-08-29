
(function() {
  "use strict";

  /**
   * Apply .scrolled class to the body as the page is scrolled down
   */
  function toggleScrolled() {
    const selectBody = document.querySelector('body');
    const selectHeader = document.querySelector('#header');
    if (!selectHeader.classList.contains('scroll-up-sticky') && !selectHeader.classList.contains('sticky-top') && !selectHeader.classList.contains('fixed-top')) return;

    const isScrolled = window.scrollY > 100;
    if (isScrolled) {
      selectBody.classList.add('scrolled');
      console.log('Scrolled: Header should be white, text should be blue');
    } else {
      selectBody.classList.remove('scrolled');
      console.log('Not scrolled: Header should be transparent, text should be white');
    }
  }

  document.addEventListener('scroll', toggleScrolled);
  window.addEventListener('load', toggleScrolled);

  /**
   * Mobile nav toggle
   */
  const mobileNavToggleBtn = document.querySelector('.mobile-nav-toggle');

  function mobileNavToogle() {
    document.querySelector('body').classList.toggle('mobile-nav-active');
    mobileNavToggleBtn.classList.toggle('bi-list');
    mobileNavToggleBtn.classList.toggle('bi-x');
  }
  if (mobileNavToggleBtn) {
    mobileNavToggleBtn.addEventListener('click', mobileNavToogle);
  }

  /**
   * Hide mobile nav on same-page/hash links
   */
  document.querySelectorAll('#navmenu a').forEach(navmenu => {
    navmenu.addEventListener('click', () => {
      if (document.querySelector('.mobile-nav-active')) {
        mobileNavToogle();
      }
    });

  });

  /**
   * Toggle mobile nav dropdowns
   */
  document.querySelectorAll('.navmenu .toggle-dropdown').forEach(navmenu => {
    navmenu.addEventListener('click', function(e) {
      e.preventDefault();
      this.parentNode.classList.toggle('active');
      this.parentNode.nextElementSibling.classList.toggle('dropdown-active');
      e.stopImmediatePropagation();
    });
  });

  /**
   * Preloader
   */
  const preloader = document.querySelector('#preloader');
  if (preloader) {
    window.addEventListener('load', () => {
      preloader.remove();
    });
  }

  /**
   * Scroll top button
   */
  let scrollTop = document.querySelector('.scroll-top');

  function toggleScrollTop() {
    if (scrollTop) {
      window.scrollY > 100 ? scrollTop.classList.add('active') : scrollTop.classList.remove('active');
    }
  }
  scrollTop.addEventListener('click', (e) => {
    e.preventDefault();
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });
  });

  window.addEventListener('load', toggleScrollTop);
  document.addEventListener('scroll', toggleScrollTop);

  /**
   * Animation on scroll function and init
   */
  function aosInit() {
    AOS.init({
      duration: 600,
      easing: 'ease-in-out',
      once: true,
      mirror: false
    });
  }
  window.addEventListener('load', aosInit);

  /**
   * Initiate Pure Counter
   */
  new PureCounter();

  /**
   * Init isotope layout and filters
   */
  document.querySelectorAll('.isotope-layout').forEach(function(isotopeItem) {
    let layout = isotopeItem.getAttribute('data-layout') ?? 'masonry';
    let filter = isotopeItem.getAttribute('data-default-filter') ?? '*';
    let sort = isotopeItem.getAttribute('data-sort') ?? 'original-order';

    let initIsotope;
    imagesLoaded(isotopeItem.querySelector('.isotope-container'), function() {
      initIsotope = new Isotope(isotopeItem.querySelector('.isotope-container'), {
        itemSelector: '.isotope-item',
        layoutMode: layout,
        filter: filter,
        sortBy: sort
      });
    });

    isotopeItem.querySelectorAll('.isotope-filters li').forEach(function(filters) {
      filters.addEventListener('click', function() {
        isotopeItem.querySelector('.isotope-filters .filter-active').classList.remove('filter-active');
        this.classList.add('filter-active');
        initIsotope.arrange({
          filter: this.getAttribute('data-filter')
        });
        if (typeof aosInit === 'function') {
          aosInit();
        }
      }, false);
    });

  });

  /**
   * Init swiper sliders
   */
  function initSwiper() {
    document.querySelectorAll(".init-swiper").forEach(function(swiperElement) {
      let config = JSON.parse(
        swiperElement.querySelector(".swiper-config").innerHTML.trim()
      );

      if (swiperElement.classList.contains("swiper-tab")) {
        initSwiperWithCustomPagination(swiperElement, config);
      } else {
        new Swiper(swiperElement, config);
      }
    });
  }

  window.addEventListener("load", initSwiper);

  /**
   * Initiate glightbox
   */
//   const glightbox = GLightbox({
//     selector: '.glightbox'
//   });


  // Configuration GLightbox personnalisée
const lightbox = GLightbox({
    selector: '.glightbox',
    touchNavigation: true,
    loop: true,
    autoplayVideos: true,
    preload: false,
    svg: {
        close: '<svg viewBox="0 0 24 24"><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/></svg>',
        next: '<svg viewBox="0 0 24 24"><path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z"/></svg>',
        prev: '<svg viewBox="0 0 24 24"><path d="M15.41 7.41L10.83 12l4.58 4.59L14 18l-6-6 6-6 1.41 1.41z"/></svg>'
    },
    plyr: {
        css: 'https://cdn.plyr.io/3.6.8/plyr.css',
        js: 'https://cdn.plyr.io/3.6.8/plyr.js'
    },
    onOpen: () => {
        // Callback quand la lightbox s'ouvre
        document.body.style.overflow = 'hidden';
    },
    onClose: () => {
        // Callback quand la lightbox se ferme
        document.body.style.overflow = 'auto';
    }
});

// Gestion des erreurs d'images
lightbox.on('slide_before_load', (slide) => {
    const img = slide.slide.querySelector('img');
    if (img) {
        img.onerror = function() {
            this.src = '{{asset("assets/img/placeholder.jpg")}}';
            this.alt = 'Image non disponible';
        };
    }
});

// Campus Gallery Functionality
document.addEventListener('DOMContentLoaded', function() {
    // Initialize GLightbox for gallery
    if (typeof GLightbox !== 'undefined') {
        const lightbox = GLightbox({
            selector: '.glightbox',
            touchNavigation: true,
            loop: true,
            autoplayVideos: true,
            preload: true,
            plyr: {
                css: 'https://cdn.plyr.io/3.6.8/plyr.css',
                js: 'https://cdn.plyr.io/3.6.8/plyr.js'
            }
        });
    }

    // Gallery Filter Functionality
    const filterTabs = document.querySelectorAll('.filter-tab');
    const galleryItems = document.querySelectorAll('.gallery-item');

    if (filterTabs.length > 0 && galleryItems.length > 0) {
        filterTabs.forEach(tab => {
            tab.addEventListener('click', function() {
                const filter = this.getAttribute('data-filter');

                // Update active tab
                filterTabs.forEach(t => t.classList.remove('active'));
                this.classList.add('active');

                // Filter gallery items
                galleryItems.forEach(item => {
                    const category = item.getAttribute('data-category');

                    if (filter === 'all' || category === filter) {
                        item.classList.remove('hidden');
                        item.style.display = 'block';

                        // Add animation
                        setTimeout(() => {
                            item.style.opacity = '1';
                            item.style.transform = 'scale(1)';
                        }, 100);
                    } else {
                        item.classList.add('hidden');
                        item.style.opacity = '0';
                        item.style.transform = 'scale(0.8)';

                        setTimeout(() => {
                            item.style.display = 'none';
                        }, 300);
                    }
                });
            });
        });
    }

    // Gallery Item Hover Effects
    galleryItems.forEach(item => {
        item.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-10px) scale(1.02)';
        });

        item.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0) scale(1)';
        });
    });

    // Image Loading Animation
    const galleryImages = document.querySelectorAll('.gallery-image');
    galleryImages.forEach(img => {
        img.addEventListener('load', function() {
            this.classList.add('loaded');
        });

        // Fallback for already loaded images
        if (img.complete) {
            img.classList.add('loaded');
        }
    });

    // Smooth Scroll for Gallery CTA
    const galleryCTA = document.querySelector('.gallery-btn');
    if (galleryCTA) {
        galleryCTA.addEventListener('click', function(e) {
            e.preventDefault();
            const target = this.getAttribute('href');
            if (target && target !== '#') {
                const element = document.querySelector(target);
                if (element) {
                    element.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            }
        });
    }

    // Gallery Grid Animation on Scroll
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const galleryObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);

    galleryItems.forEach(item => {
        item.style.opacity = '0';
        item.style.transform = 'translateY(30px)';
        item.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        galleryObserver.observe(item);
    });

    // Filter Tab Hover Effects
    filterTabs.forEach(tab => {
        tab.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-2px) scale(1.05)';
        });

        tab.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0) scale(1)';
        });
    });

    // Gallery Search Functionality (if needed)
    const gallerySearch = document.querySelector('.gallery-search');
    if (gallerySearch) {
        const searchInput = gallerySearch.querySelector('input');
        searchInput.addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase();

            galleryItems.forEach(item => {
                const title = item.querySelector('.overlay-text h4')?.textContent.toLowerCase() || '';
                const description = item.querySelector('.overlay-text p')?.textContent.toLowerCase() || '';

                if (title.includes(searchTerm) || description.includes(searchTerm)) {
                    item.style.display = 'block';
                    item.style.opacity = '1';
                } else {
                    item.style.opacity = '0';
                    setTimeout(() => {
                        item.style.display = 'none';
                    }, 300);
                }
            });
        });
    }

    // Gallery Masonry Layout (if needed)
    function initMasonry() {
        if (typeof Masonry !== 'undefined') {
            const grid = document.querySelector('.gallery-grid');
            if (grid) {
                new Masonry(grid, {
                    itemSelector: '.gallery-item',
                    columnWidth: '.gallery-item',
                    percentPosition: true,
                    gutter: 25
                });
            }
        }
    }

    // Initialize masonry after images load
    window.addEventListener('load', initMasonry);

    // Gallery Fullscreen Mode
    const fullscreenBtn = document.querySelector('.gallery-fullscreen');
    if (fullscreenBtn) {
        fullscreenBtn.addEventListener('click', function() {
            const gallerySection = document.querySelector('.campus-gallery-section');
            if (gallerySection) {
                if (!document.fullscreenElement) {
                    gallerySection.requestFullscreen().catch(err => {
                        console.log('Error attempting to enable fullscreen:', err);
                    });
                } else {
                    document.exitFullscreen();
                }
            }
        });
    }

    // Gallery Keyboard Navigation
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            if (document.fullscreenElement) {
                document.exitFullscreen();
            }
        }
    });

    // Gallery Performance Optimization
    const lazyImages = document.querySelectorAll('.gallery-image[data-src]');
    if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.src = img.dataset.src;
                    img.classList.remove('lazy');
                    imageObserver.unobserve(img);
                }
            });
        });

        lazyImages.forEach(img => imageObserver.observe(img));
    }

    // Gallery Touch Gestures for Mobile
    let touchStartX = 0;
    let touchEndX = 0;

    galleryItems.forEach(item => {
        item.addEventListener('touchstart', function(e) {
            touchStartX = e.changedTouches[0].screenX;
        });

        item.addEventListener('touchend', function(e) {
            touchEndX = e.changedTouches[0].screenX;
            handleSwipe();
        });
    });

    function handleSwipe() {
        const swipeThreshold = 50;
        const diff = touchStartX - touchEndX;

        if (Math.abs(diff) > swipeThreshold) {
            if (diff > 0) {
                // Swipe left - next image
                console.log('Swipe left - next image');
            } else {
                // Swipe right - previous image
                console.log('Swipe right - previous image');
            }
        }
    }

    // Gallery Analytics (if needed)
    function trackGalleryInteraction(action, itemId) {
        if (typeof gtag !== 'undefined') {
            gtag('event', 'gallery_interaction', {
                'event_category': 'gallery',
                'event_label': action,
                'value': itemId
            });
        }
    }

    // Add click tracking to gallery items
    galleryItems.forEach(item => {
        item.addEventListener('click', function() {
            const itemId = this.getAttribute('data-id') || 'unknown';
            trackGalleryInteraction('click', itemId);
        });
    });

    // Gallery Accessibility
    galleryItems.forEach((item, index) => {
        const link = item.querySelector('a');
        if (link) {
            link.setAttribute('aria-label', `View image ${index + 1} in lightbox`);
            link.setAttribute('tabindex', '0');
        }
    });

    // Gallery Keyboard Navigation
    document.addEventListener('keydown', function(e) {
        const activeElement = document.activeElement;
        if (activeElement.classList.contains('gallery-item')) {
            switch(e.key) {
                case 'Enter':
                case ' ':
                    e.preventDefault();
                    activeElement.querySelector('a')?.click();
                    break;
                case 'ArrowRight':
                    e.preventDefault();
                    const nextItem = activeElement.nextElementSibling;
                    if (nextItem && nextItem.classList.contains('gallery-item')) {
                        nextItem.focus();
                    }
                    break;
                case 'ArrowLeft':
                    e.preventDefault();
                    const prevItem = activeElement.previousElementSibling;
                    if (prevItem && prevItem.classList.contains('gallery-item')) {
                        prevItem.focus();
                    }
                    break;
            }
        }
    });

    console.log('Campus Gallery functionality initialized successfully!');
});

})();
