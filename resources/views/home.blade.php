<!DOCTYPE html>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>Laravel</title>

        @vite(["resources/scss/app.scss", "resources/js/app.js"])
    </head>
    <body class="antialiased">
        <nav class="navbar navbar-dark navbar-expand-lg bg-primary">
            <div class="container flex justify-content-between">
                <a class="navbar-link" href="{{ route("home") }}">
                    <img
                        class="h-32"
                        src="{{ url("assets/images/logo.png") }}"
                        alt=""
                    />
                </a>
                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div
                    class="collapse navbar-collapse"
                    id="navbarSupportedContent"
                >
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a
                                class="nav-link active"
                                aria-current="page"
                                href="{{ route("home") }}"
                            >
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a
                                class="nav-link"
                                aria-current="page"
                                href="{{ route("home") }}"
                            >
                                Discussion
                            </a>
                        </li>
                        <li class="nav-item">
                            <a
                                class="nav-link text-nowrap"
                                aria-current="page"
                                href="{{ route("home") }}"
                            >
                                About Us
                            </a>
                        </li>
                    </ul>
                    <form
                        class="d-flex w-100 me-4 my-2 my-lg-0"
                        role="search"
                        action="#"
                        method="GET"
                    >
                        <div class="input-group">
                            <span
                                class="input-group-text bg-white border-end-0"
                            >
                                <img
                                    src="{{ url("assets/icons/search.png") }}"
                                    alt="Search"
                                />
                            </span>
                            <input
                                class="form-control border-start-0 ps-0"
                                type="search"
                                placeholder="Search"
                                aria-label="Search"
                                name=""
                                value=""
                            />
                        </div>
                    </form>
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        <li class="nav-item my-auto">
                            <a class="nav-link text-nowrap" href="">Log In</a>
                        </li>
                        <li class="nav-item ps-1 pe-0">
                            <a class="btn btn-primary-white" href="">Sign Up</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    </body>
</html>
