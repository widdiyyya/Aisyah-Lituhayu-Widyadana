console.log("hello world")

const li = document.querySelectorAll(".list");

li.forEach((e,i) => {
    e.addEventListener("click", () => {
        li.forEach(e => {
            e.classList.remove("activelist")
        })
        e.classList.add("activelist")
    })
})