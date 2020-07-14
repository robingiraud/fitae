@extends('layouts.app')

@section('content')
    <section class="pb-20 relative block bg-gray-900 mt-16">
        <div
            class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
            style="height: 80px; transform: translateZ(0px);"
        >
            <svg
                class="absolute bottom-0 overflow-hidden"
                xmlns="http://www.w3.org/2000/svg"
                preserveAspectRatio="none"
                version="1.1"
                viewBox="0 0 2560 100"
                x="0"
                y="0"
            >
                <polygon
                    class="text-gray-900 fill-current"
                    points="2560 0 2560 100 0 100"
                ></polygon>
            </svg>
        </div>
        <div class="container mx-auto px-4 lg:pt-24 lg:pb-64">
            <div class="flex flex-wrap text-center justify-center">
                <div class="w-full lg:w-6/12 px-4">
                    <h2 class="text-4xl font-semibold text-white">L'offre Club</h2>
                    <p class="text-lg leading-relaxed mt-4 mb-4 text-gray-500">
                        Put the potentially record low maximum sea ice extent tihs year
                        down to low ice. According to the National Oceanic and
                        Atmospheric Administration, Ted, Scambos.
                    </p>
                </div>
            </div>
            <div class="flex flex-wrap mt-12 justify-center">
                <div class="w-full lg:w-3/12 px-4 text-center">
                    <div
                        class="text-gray-900 p-3 w-12 h-12 shadow-lg rounded-full bg-white inline-flex items-center justify-center"
                    >
                        <i class="fa fa-medkit text-xl"></i>
                    </div>
                    <h6 class="text-xl mt-5 font-semibold text-white">
                        Prévention de blessures
                    </h6>
                    <p class="mt-2 mb-4 text-gray-500">
                        Bien travailler pour prévenir les risques et éviter la blessure tout au long de la saison
                    </p>
                </div>
                <div class="w-full lg:w-3/12 px-4 text-center">
                    <div
                        class="text-gray-900 p-3 w-12 h-12 shadow-lg rounded-full bg-white inline-flex items-center justify-center"
                    >
                        <i class="fa fa-sun-o text-xl"></i>
                    </div>
                    <h5 class="text-xl mt-5 font-semibold text-white">Préparation estivale</h5>
                    <p class="mt-2 mb-4 text-gray-500">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi delectus distinctiosint voluptates.
                    </p>
                </div>
                <div class="w-full lg:w-3/12 px-4 text-center">
                    <div
                        class="text-gray-900 p-3 w-12 h-12 shadow-lg rounded-full bg-white inline-flex items-center justify-center"
                    >
                        <i class="fa fa-snowflake-o text-xl"></i>
                    </div>
                    <h5 class="text-xl mt-5 font-semibold text-white">Préparation hivernale</h5>
                    <p class="mt-2 mb-4 text-gray-500">
                        Trouver le second souffle pour aborder la deuxième partie de saison à 100%
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="relative block py-24 lg:pt-0 bg-gray-900">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap justify-center lg:-mt-64 -mt-48">
                <div class="w-full lg:w-6/12 px-4">
                    <div
                        class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-gray-300"
                    >
                        <div class="flex-auto p-5 lg:p-10">
                            <h4 class="text-2xl font-semibold">Vous êtes intéressé par l'offre Club?</h4>
                            <p class="leading-relaxed mt-1 mb-4 text-gray-600">
                                Indiquez nous toute information jugée utile à la création de votre préparation physique. Nous répondons dans les 24 heures qui suivent votre demande.
                            </p>
                            <form action="/offre-club" method="POST">
                                @csrf
                                <div class="relative w-full mb-3 mt-8">
                                    <label
                                        class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                        for="name"
                                    >Nom du club</label
                                    ><input
                                        name="name"
                                        type="text"
                                        class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full"
                                        placeholder="Nom du club"
                                        style="transition: all 0.15s ease 0s;"
                                    />
                                </div>
                                <div class="relative w-full mb-3">
                                    <label
                                        class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                        for="email"
                                    >Email</label
                                    ><input
                                        name="email"
                                        type="email"
                                        class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full"
                                        placeholder="Email"
                                        style="transition: all 0.15s ease 0s;"
                                    />
                                </div>
                                <div class="relative w-full mb-3">
                                    <label
                                        class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                        for="message"
                                    >Précisions de la demande</label
                                    ><textarea
                                        name="message"
                                        rows="4"
                                        cols="80"
                                        class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full"
                                        placeholder="Ici, détaillez votre demande en précisant les objectifs du club, le nombre d'entrainements hebdomadaires..."
                                    ></textarea>
                                </div>
                                <div class="text-center mt-6">
                                    <button
                                        class="bg-gray-900 text-white active:bg-gray-700 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1"
                                        type="submit"
                                        style="transition: all 0.15s ease 0s;"
                                    >
                                        J'envoie ma demande
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
