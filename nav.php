<style>
    nav a:hover{
        color:#000;
        bottom: 30%;
     }
    
    nav a::before {
    content: '';
    display: block;
    height: 4px;
    background-color: #444;
    bottom: 100%;
    top: 90%;
    width: 0;
    position: absolute;
    
    

    -webkit-transition: all ease-in-out 250ms;

    transition: all ease-in-out 250ms;
    }
    nav a:hover::before {
    width:4%;
    }

</style>
    <div class="navpintar container">
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="#">SAKAI</a>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="index" class="nav-link">Home</a>
                </li>
                <li class="navbar-item">
                    <a href="tentang" class="nav-link">Tentang Kami</a>
                </li>
                <li class="navbar-item">
                    <a href="layanan" class="nav-link">Layanan</a>
                </li>
                <li class="navbar-item">
                    <a href="kontak" class="nav-link">Kontak Kami</a>
                </li>
            </ul>
        </nav>
    </div>