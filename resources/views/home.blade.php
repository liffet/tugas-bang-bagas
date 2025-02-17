<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .navbar-nav .nav-link:hover {
            background-color: rgba(0, 123, 255, 0.2);
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background: linear-gradient(to right, rgb(139, 176, 251), rgb(134, 192, 255));">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#" onclick="showSection('home')" style="font-size: 20px;">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" onclick="showSection('about')" style="font-size: 20px;">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" onclick="showSection('contact')" style="font-size: 20px;">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
   
        <section id="home" class="section-content">
            <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure accusamus repellat perferendis unde hic, quod animi? Perferendis similique repellendus beatae illum, sapiente sint rerum tempora necessitatibus, nulla laborum, provident labore.</p>
        </section>


        <section id="about" class="section-content d-none text-center">
            <h1>About Us</h1>
            <img src="{{ asset('images/lah.jpeg') }}" alt="Profile Picture" class="rounded-circle shadow-lg mb-3 mx-auto" style="width: 150px; height: 150px;">
            <h3 class="font-weight-bold">Mohammad Nazar Alif</h3> 
            <p>Saya adalah Ultramen.</p>
        </section>

    
        <section id="contact" class="section-content d-none">
            <h1 class="text-center">Contact Us</h1>
            <form class="w-50 mx-auto">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter your name">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter your email">
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control" id="message" rows="3" placeholder="Enter your message"></textarea>
                </div>
                <button type="submit" class="btn btn-primary d-block mx-auto">Submit</button>
            </form>
        </section>
    </div>

    <script>
        function showSection(sectionId) {
          
            document.querySelectorAll('.section-content').forEach(section => {
                section.classList.add('d-none');
            });

            document.getElementById(sectionId).classList.remove('d-none');
        }
    </script>

</body>
</html>
