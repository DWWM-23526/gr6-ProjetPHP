const customCarousels = document.querySelectorAll(".custom-carousel");

customCarousels.forEach((carousel) => {
    const innerContainer = carousel.querySelector(".inner-container");

    let pressed = false;
    let startX;
    let x;

    carousel.addEventListener("mousedown", (e) => {
        pressed = true;
        startX = e.offsetX - innerContainer.offsetLeft;
    });

    carousel.addEventListener("touchstart", (e) => {
        pressed = true;
        startX = e.touches[0].clientX - innerContainer.offsetLeft;
    });

    carousel.addEventListener("mouseup", () => {
        pressed = false;
    });

    carousel.addEventListener("mouseleave", () => {
        pressed = false;
    });

    carousel.addEventListener("mousemove", (e) => {
        if (!pressed) return;
        e.preventDefault();

        x = e.offsetX;
        innerContainer.style.left = `${x - startX}px`;
        bounds();
    });

    carousel.addEventListener("touchmove", (e) => {
        if (!pressed) return;
        e.preventDefault();

        x = e.touches[0].clientX;
        innerContainer.style.left = `${x - startX}px`;
        bounds();
    });

    let bounds = () => {
        let outer = carousel.getBoundingClientRect();
        let inner = innerContainer.getBoundingClientRect();

        if (parseInt(innerContainer.style.left) > 0) {
            innerContainer.style.left = "0px";
        }

        if (inner.right < outer.right) {
            innerContainer.style.left = `-${inner.width - outer.width}px`;
        }
    };
});