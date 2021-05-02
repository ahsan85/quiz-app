<x-app-layout>

     @if(request()->routeIs('subjects.*'))
          <Subject :subjects="{{$subjects}}" ></Subject>
     @endif



</x-app-layout>
