
const section = document.querySelector('.projects__section');

section.addEventListener('mousemove', (e) => {
    const { offsetX, offsetY, target } = e;
    const { clientWidth, clientHeight } = target;

    // Calcula la posición de la luz basándote en la posición del cursor
    const x = (offsetX / clientWidth) * 100;
    const y = (offsetY / clientHeight) * 100;

    section.style.background = `radial-gradient(circle at ${x}% ${y}%,#00ffff69, #001318)`;
});