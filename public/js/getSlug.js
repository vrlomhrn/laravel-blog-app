const title = document.querySelector("#title");
const slug = document.querySelector("#slug");

title.addEventListener("keyup", () => {
    let preslug = title.value;
    preslug = preslug.replace(/ /g, "-");

    slug.value = preslug.toLowerCase();
});
