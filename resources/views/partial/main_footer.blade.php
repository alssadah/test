<ul  class="listnone">
    @php 
        if (Voyager::translatable($items)) {
             $items = $items->load('translations');
        }
    
    @endphp
    
        @foreach ($items as $item)
        
            @php
        
                $originalItem = $item;
                if (Voyager::translatable($item)) {
                    $item = $item->translate($options->locale);
                }
        
                $isActive = null;
                $styles = null;
                $icon = null;
        
                // Background Color or Color
                if (isset($options->color) && $options->color == true) {
                    $styles = 'color:'.$item->color;
                }
                if (isset($options->background) && $options->background == true) {
                    $styles = 'background-color:'.$item->color;
                }
        
                // Check if link is current
                if(url($item->link()) == url()->current()){
                    $isActive = 'active';
                }
        
                // Set Icon
                if(isset($options->icon) && $options->icon == true){
                    $icon = '<i class="' . $item->icon_class . '"></i>';
                }
        
            @endphp
        
            <li class="{{ $isActive }}">

            @if($lang=="ar")
            <a href="{{ url($item->link()) }}" target="{{ $item->target }}" style="{{ $styles }}">
 
            @elseif($lang=="en")

              @if($loop->last) 
        
<a href="{{ url($item->link()) }}" target="{{ $item->target }}" style="{{ $styles }}">

@else
<a href="{{ url($lang.$item->link()) }}" target="{{ $item->target }}" style="{{ $styles }}">

    @endif
              
            @endif
              
                    {!! $icon !!}
                    <span>{{ $item->title }}</span>
                </a>
                @if(!$originalItem->children->isEmpty())
              {{--       @include('partial.main_menu', ['items' => $originalItem->children, 'options' => $options]) --}}
                @endif
            </li>
        @endforeach
        
        </ul>
        