<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.1.3/axios.min.js" integrity="sha512-0qU9M9jfqPw6FKkPafM3gy2CBAvUWnYVOfNPDYKVuRTel1PrciTj+a9P3loJB+j0QmN2Y0JYQmkBBS8W+mbezg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.7.13/vue.min.js" integrity="sha512-9PmLIATEd4w0OxdTHq61p12lQqa8OtDC6nXu0+S1Icb800oxoADle+gaPfmAXLa35KSvk/6bGeNRfi3nq0Hvvw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>   <title>Lista Studenti</title>
    <script src="script.js" defer></script>
    <link rel="stylesheet" href="css/style.css">
<title></title>
</head>
<body>
    <header>
        <img src="https://seeklogo.com/images/S/spotify-2015-logo-560E071CB7-seeklogo.com.png?v=637903118310000000" alt="">
    </header>
    <div id="app">
        <div class="container">
            <div class="card" v-for="element of containerMusic">
                <div class="card-content">
                    <img :src="element.poster" :alt="element.poster">
                </div>
                <br>
                <h3>{{element.title}}</h3>
                <h5>{{element.author}}</h5>
                <p>{{element.year}}</p>
            </div>
        </div>
    </div>
</body>
</html>