<html>

<head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Paddy Farming System For Mon State</title>
  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
   <link rel="stylesheet" href="css/admin.css">
   <link rel="stylesheet" href="css/bootstrap.css">
   <script src="https://unpkg.com/flowbite@1.4.4/dist/flowbite.js"></script>
   <script src="https://cdn.tailwindcss.com"></script>
 
 <style type="text/css">
      label
      {
          display: inline-block;
          
          width:200px;
          
          color:white;
          text-align: center;
      }
 
      .table{
            background-color: rgba(0, 0, 0, 0.5);
            width: 250px;
            height: 360px;
            border-radius: 5px;
            box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
      }
      .gg{
            background-image: url('photo/field.jpg');
            background-size: cover;
            position: absolute;
            top: 0;
            left: 12%;
            width: 88%;
            height: 120%;
      }

 </style>

</head>

<body>

@include('admin.nav')

@include('admin.sidebar')
 

<div class="container my-12 mx-auto px-4 md:px-12"
>
    <div class="flex flex-wrap -mx-1 lg:-mx-4">

        <!-- Column -->
        @foreach($review as $feedback)
        <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3"
        style="width:45%;
        display:block;margin-left:auto;
        margin-right:auto">

<!-- Article -->
            <article class="overflow-hidden rounded-lg shadow-lg"
            style="background-color: #234f1e;
            height:35vh; width:80%;
            margin-left:40%">

       
                  
             

               
<h2 class="text-2xl" style="text-align: center;
color:white"><b>{{$feedback->user->name}}</b></h2>

    <div class="flex items-center space-x-1" style="
    margin-left:120px;
    
  ">  <br><br>
        @for($i=0;$i<$feedback->star;$i++)
    <svg class="w-4 h-4 text-yellow-300" 
    
    
   
    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
    </svg>
    @endfor
  

  
</div>
<p class="text-2xl"
style="text-align: center;font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
color:white">{{$feedback->message}}</p>
               

            </article>
            <!-- END Article -->

        </div>
        @endforeach
        <!-- END Column -->

        <!-- Column -->

        <!-- END Column -->

    </div>
</div> 
@include('admin.script')
</body>
</html>