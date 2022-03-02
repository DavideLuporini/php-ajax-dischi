<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi</title>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/axios/0.26.0/axios.min.js' integrity='sha512-bPh3uwgU5qEMipS/VOmRqynnMXGGSRv+72H/N260MQeXZIK4PG48401Bsby9Nq5P5fz7hy5UGNmC/W1Z51h2GQ==' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.14/vue.min.js' integrity='sha512-XdUZ5nrNkVySQBnnM5vzDqHai823Spoq1W3pJoQwomQja+o4Nw0Ew1ppxo5bhF2vMug6sfibhKWcNJsG8Vj9tg==' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="../style/style.css">

</head>

<body>
    <div id="app">
        <header class="d-flex align-items-center justify-content-between">

            <i class="fab fa-spotify px-4"></i>
            <div class="pe-5">
                <input class="search" type="text" placeholder="search song">
                <button>search</button>
            </div>
        </header>
        <main class="container h-100 d-flex justify-content-center">
            <ul class="row h-100 d-flex flex-wrap my-1 g-3">
                <li v-for="song in songs" :key="song" class="text-center cards p-3 col-3 g-3">
                    <div class="bgc text-center">
                        <img class="img-fluid p-3" :src="song.poster" alt="song.title" />
                        <h4 class=" subtitle text-white"> {{song.title}}</h4>
                        <h5 class="text-secondary">{{song.author}} </h5>
                        <h6 class="text-secondary">{{song.year}} </h6>
                    </div>
                </li>
            </ul>
        </main>
    </div>
    <script src="./js/script.js"></script>
</body>

</html>

</html>