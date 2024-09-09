const animation_left = document.querySelectorAll(".animation_left");
const animation_right = document.querySelectorAll(".animation_right");
const animation_top = document.querySelectorAll(".animation_top");
const animation_bottom = document.querySelectorAll(".animation_bottom");

const observer = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("scroll-animation");
      } else {
        entry.target.classList.remove("scroll-animation");
      }
    });
  },
  { threshold: 0.1 }
);
//
for (let i = 0; i < animation_left.length; i++) {
  const elements = animation_left[i];

  observer.observe(elements);
}
for (let i = 0; i < animation_right.length; i++) {
  const elements = animation_right[i];

  observer.observe(elements);
}
for (let i = 0; i < animation_top.length; i++) {
  const elements = animation_top[i];

  observer.observe(elements);
}
for (let i = 0; i < animation_bottom.length; i++) {
  const elements = animation_bottom[i];

  observer.observe(elements);
}
