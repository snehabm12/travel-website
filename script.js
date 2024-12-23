document.addEventListener("DOMContentLoaded", () => {
    const destinations = [
        { image: "images/destination1.jpg", title: "Destination 1", description: "A beautiful place to explore." },
        { image: "images/destination2.jpg", title: "Destination 2", description: "Discover breathtaking views." },
        { image: "images/destination3.jpg", title: "Destination 3", description: "Experience a magical journey." },
    ];

    const gallery = document.querySelector(".gallery");
    gallery.innerHTML = destinations
        .map(
            (dest) => `
            <div class="card">
                <img src="${dest.image}" alt="${dest.title}">
                <h3>${dest.title}</h3>
                <p>${dest.description}</p>
            </div>
        `
        )
        .join("");
});
