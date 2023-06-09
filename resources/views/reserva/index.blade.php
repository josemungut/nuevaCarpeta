<x-app-layout>

    <style>
        body {
            font-family: sans-serif;
        }

        .hero1 {
            background-image: url("https://images.unsplash.com/photo-1541534741688-6078c6bfb5c5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=869&q=80");
            /*photo by okeykat for Unsplash */

            background-size: cover;
            background-position: center;
            text-align: center;
            padding: 200px 0;
            color: hotpink;

        }

        .hero1 h1,
        .hero2 h1 {
            font-size: 3rem;
            margin-bottom: 0.5rem;
        }

        .hero1 h1 {
            -webkit-text-stroke: 1px white;
            text-stroke: 1px hotpink;
        }

        .hero1 p {
            font-size: 1.5rem;
            color: #7A6174;
            font-weight: bold;
        }

        h2 {
            font-size: 2rem;
            margin-bottom: 1.5rem;

        }

        .testimonials {
            text-align: center;
            background-color: #8e9eb8;
            color: white;
            padding: 3rem;
        }

        .container {
            display: flex;
            gap: 1.5rem;
            padding: 2rem;
        }



        .testimonial {
            flex: 1;
            padding: 2rem 1rem;
            border-radius: 1rem;
            background-color: #7A6174;
            position: relative;
            text-align: center;
            font-weight: bold;


        }

        .testimonial h3 {
            margin-bottom: 1rem;
            font-style: italic;
        }

        .testimonial h3:before {
            font-family: Georgia, serif;
            content: "“";
            font-size: 10rem;
            position: absolute;
            top: 0;
            left: 0;
            margin: 0;
            padding: 0;
            color: white;
            opacity: 0.25;

        }

        .testimonial p {
            font-size: 1.2rem;
            margin-bottom: 0.5rem;
        }

        .hero2 {
            background-color: #7A6174;
            background-image:
                /* photo by Michael G for Unsplash */
                url("https://images.unsplash.com/photo-1649923625228-3d2c89437a6e?crop=entropy&cs=srgb&fm=jpg&ixid=M3wzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE2ODQ1MTk2ODh8&ixlib=rb-4.0.3&q=85"),
                url("https://images.unsplash.com/photo-1582798358481-d199fb7347bb?crop=entropy&cs=srgb&fm=jpg&ixid=M3wzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE2ODQ1MjQxMjJ8&ixlib=rb-4.0.3&q=85");
            /* photo by Susan Q Yin for Unsplash */
            background-position: left, right;
            background-size: contain;
            background-blend-mode: hard-light;
            background-repeat: no-repeat;
            text-align: center;
            padding: 150px 0;
            color: white;
        }



        @media all AND (max-width: 500px) {
            .hero2 {
                background-image: url("https://images.unsplash.com/photo-1649923625228-3d2c89437a6e?crop=entropy&cs=srgb&fm=jpg&ixid=M3wzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE2ODQ1MTk2ODh8&ixlib=rb-4.0.3&q=85");
                /* photo by Michael G for Unsplash */
                background-position: center;
                background-size: cover;
                background-blend-mode: hard-light;
                background-repeat: no-repeat;
            }


            .container {
                flex-direction: column;
            }

        }
    </style>
    <section class="hero1">
        <h1>Barkin' Baxter's Treat Truck</h1>
        <p>Poppin' Up Soon at a Dog Park Near You!</p>
    </section>

    <section class="testimonials">
        <h2>TUS RESERVAS</h2>
        <div class="container">
            @foreach ($reserva as $clase)
                <div class="testimonial">
                    <h3>{{ Auth::user()->name }}</h3>
                    <h3>{{ $clase->actividad->nombre }}</h3>
                    <p> {{ $clase->fecha_reserva }}</p>
                    <form class="inline-block" action={{ route('reserva.destroy', ['reserva' => $clase->id]) }}
                        method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="text-purple-700 hover:text-white border border-purple-700 hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-purple-400 dark:text-purple-400 dark:hover:text-white dark:hover:bg-purple-500 dark:focus:ring-purple-900">Borrar</button>
                    </form>
                </div>
            @endforeach
        </div>
    </section>

   




</x-app-layout>
