window.addEventListener("DOMContentLoaded", (event) => {

const panels = document.querySelectorAll(".day-container")

panels.forEach((panel) => {
    panel.addEventListener(
        'click',
        () => {
            console.log('panel clicked');
            removeAcitveClass();
            console.log('class removed');
            panel.classList.add("active");
            console.log('class added');
        }
    );
})

function removeAcitveClass() {
    panels.forEach((panel) => {
        panel.classList.remove("active");
    })
}

const currentDate = new Date();

const monday = new Date(currentDate);
monday.setDate(currentDate.getDate() - currentDate.getDay() + (currentDate.getDay() === 0 ? -6 : 1));

const formattedDate = `${monday.toLocaleDateString('en-GB', { weekday: 'long' })} ${monday.toLocaleDateString('en-GB', { day: 'numeric', month: 'numeric' })}`;

document.querySelector('.planner-nav-bar-date').textContent  = `Week Starting: ${formattedDate}`;

});