@extends('layouts.app')
<div class="container">

         <h1>Dise☺ñar</h1>
            {{$atos->id}}
            {{$atos->nombre}}
            {{$atos->descripcion_corta}}</td>
            {{$atos->review ?  $atos->review : 'No Tiene' }}
            {{$atos->precio}}
            
                  
               
         
     </div>
