const baseAPI = 'http://95.111.237.223:1337';


/**
 * It fetches a video from an API, then sets the source of the video element to the video url, then
 * loads the video.
 */
function getVideoHeader() {
    let videoHeader
    fetch(baseAPI + "/api/video-header?populate=video")
        .then((resp) => resp.json())
        .then(function (data) {
            videoHeader = baseAPI + data.data.attributes.video.data.attributes.url;
            document.querySelector("source").src = videoHeader;
            document.querySelector("video").load();

        })
        .catch(function (error) {
            console.log(error);
        });
}

/**
 * It gets the news from the API and displays it on the page.
 * @param id - the id of the news
 */
function getOneNews(id) {
    if (!id) {
        Headers(location = "news.php");
    }
    fetch(baseAPI + "/api/blogs/" + id + "?populate=Image")
        .then((resp) => resp.json())
        .then(function (data) {
            const imageNews = baseAPI + data.data.attributes.Image.data.attributes.url;
            const titleNews = data.data.attributes.Titre;
            const textNews = data.data.attributes.Texte;
            document.querySelector(".image-news").getElementsByTagName("img")[0].src = imageNews;
            document.querySelector(".title-news").getElementsByTagName("p")[0].innerHTML = titleNews;
            document.querySelector(".body-news").getElementsByTagName("p")[0].innerHTML = textNews;
            //https://static.wixstatic.com/media/ab3530_30001e69e69d4aa6b16133e9ffdddad0~mv2.jpg
        })
}

/**
 * It fetches data from an API, then it displays it in a div.
 */
function getNews() {
    fetch(baseAPI + "/api/blogs?populate=Image")
        .then((resp) => resp.json())
        .then(function (data) {
            const totalNews = data.meta.pagination.total;
            const divNews = document.querySelector("#news_list");
            for (let index = 0; index < totalNews; index++) {
                const imageNews = baseAPI + data.data[index].attributes.Image.data.attributes.url;
                const titleNews = data.data[index].attributes.Titre;
                const textNews = data.data[index].attributes.Texte;
                const idNews = data.data[index].id;
                if (index % 2 == 1) {
                    //impaire
                    divNews.innerHTML += `<a href="news_page.php?id=` + idNews + `" class="newsLink">
                    <div class="margin-right">
                        <div class="card-wrapper">
                            <div class="card-body">
                                <h2>`+ titleNews + `</h2>
                                <p>`+ textNews.substring(0, 150) + "..." + `</p>
                            </div>
                            <div class="card-image" style="background: url(`+ imageNews + `); background-size: cover; background-position: center center;"></div>
                        </div>
                    </div>
                </a>`
                } else {
                    //paire
                    divNews.innerHTML += `<a href="news_page.php?id=` + idNews + `" class="newsLink">
                    <div class="margin-left">
                        <div class="card-wrapper">
                            <div class="card-body">
                                <h2>`+ titleNews + `</h2>
                                <p>`+ textNews.substring(0, 150) + "..." + `</p>
                            </div>
                            <div class="card-image" style="background: url(`+ imageNews + `); background-size: cover; background-position: center center;"></div>
                        </div>
                    </div>
                </a>`
                }
            }
        })
}

/**
 * It fetches data from an API, then it loops through the data and appends it to a div.
 */
function getStaffs() {
    fetch(baseAPI + "/api/staffs/?populate=Image")
        .then((resp) => resp.json())
        .then(function (data) {
            const totalStaff = data.meta.pagination.total;
            const divStaff = document.querySelector("#staff_list");
            for (let index = 0; index < totalStaff; index++) {
                const imageStaff = baseAPI + data.data[index].attributes.Image.data.attributes.url;
                const nameStaff = data.data[index].attributes.Name;
                const roleStaff = data.data[index].attributes.Role;
                divStaff.innerHTML += `
                    <div class="col">
                        <div class="card card-staff">
                                <img src="`+ imageStaff + `" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-title fontStencil">`+ nameStaff + `</p>
                                <p class="card-role fontRaleway">`+ roleStaff + `</p>
                            </div>
                        </div>
                    </div>`
            }
        })
}