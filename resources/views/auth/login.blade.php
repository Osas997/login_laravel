<!doctype html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Bunga Lokal</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
   <div class="container">
      <div class="row justify-content-center mt-5">
         <div class="col-md-6">
            <div class="card">

               <div class="card-header">
                  Login
               </div>
               <div class="card-body">
                  @if (session()->has("loginError"))
                  <div class="row flex justify-content-center">
                     <div class="my-2 toast show align-items-center text-bg-danger border-0" role="alert"
                        aria-live="assertive" aria-atomic="true">
                        <div class="d-flex">
                           <div class="toast-body">
                              {{ session("loginError") }}
                           </div>
                           <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                              aria-label="Close"></button>
                        </div>
                     </div>
                  </div>
                  @endif
                  <form action="{{ route('authenticate') }}" method="post">
                     @csrf
                     <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="email">
                     </div>
                     <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="password">
                     </div>
                     <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Login</button>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
   </script>
</body>

</html>