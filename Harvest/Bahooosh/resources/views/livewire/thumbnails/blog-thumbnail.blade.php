<div class="thumbnail-blog flex justify-between items-center bg-white w-full">
    @php($thumb = $post->files()->first())
    <div class="img-blog">
        <img src="{{ asset($thumb?->path ?? getValue('post_thumbnail_default')) }}" alt="{{ $thumb?->alt ?? $post->title }}">
    </div>
    <div class="detail-blog flex flex-col items-start">
        <div class="date w-full gap-2 flex justify-start items-center">
            <svg id="Calendar_2" data-name="Calendar 2" xmlns="http://www.w3.org/2000/svg"
                 width="18" height="20" viewBox="0 0 23.63 25.599">
                <path id="Path_839" data-name="Path 839" d="M6,16H9.376"
                      transform="translate(-0.213 -0.247)" fill="none" stroke="#d4d4d4"
                      stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
                <path id="Path_840" data-name="Path 840" d="M6,20H9.376"
                      transform="translate(-0.213 -0.308)" fill="none" stroke="#d4d4d4"
                      stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
                <path id="Path_841" data-name="Path 841"
                      d="M7.877,0a.985.985,0,0,1,.985.985V2.053c.9-.058,1.878-.084,2.954-.084s2.058.025,2.954.084V.985a.985.985,0,1,1,1.969,0V2.258c4.5.678,6.23,2.7,6.727,7.588q.048.474.081.985.031.475.05.983.035.929.034,1.97T23.6,15.754q-.019.509-.05.984-.033.509-.081.981c-.532,5.235-2.481,7.184-7.715,7.715q-.473.048-.981.081-.476.031-.984.05-.928.035-1.969.034C2.085,25.6,0,23.514,0,13.784q0-1.043.034-1.97.019-.508.05-.983.033-.511.081-.985C.662,4.957,2.4,2.935,6.892,2.258V.985A.985.985,0,0,1,7.877,0ZM6.892,4.252A6.614,6.614,0,0,0,4.045,5.284c-.93.682-1.6,1.879-1.9,4.562H21.484c-.3-2.683-.969-3.88-1.9-4.562a6.614,6.614,0,0,0-2.847-1.032v.671a.985.985,0,1,1-1.969,0V4.028c-.855-.06-1.833-.09-2.954-.09s-2.1.03-2.954.09v.895a.985.985,0,1,1-1.969,0Zm14.3,13.523q.147-.019.288-.034c-.258,2.3-.79,3.492-1.5,4.206s-1.911,1.245-4.206,1.5q.015-.141.034-.288a6.5,6.5,0,0,1,1.628-3.76A6.5,6.5,0,0,1,21.194,17.776Zm-7.34,5.13c-.032.24-.055.471-.072.69-.609.024-1.264.035-1.967.035A26.489,26.489,0,0,1,6.291,23.2a5.138,5.138,0,0,1-2.64-1.251A5.138,5.138,0,0,1,2.4,19.308a26.491,26.491,0,0,1-.431-5.524c0-.7.011-1.359.035-1.969H21.626c.024.61.035,1.265.035,1.969s-.011,1.358-.035,1.967c-.219.017-.45.04-.69.072a8.437,8.437,0,0,0-4.894,2.187A8.437,8.437,0,0,0,13.854,22.905Z"
                      transform="translate(0)" fill="#d4d4d4" fill-rule="evenodd"/>
            </svg>
            <span class="text-small text-light bolX">{{ jdate($post->created_at)->format('d %B Y') }}</span>
        </div>
        <h3 class="title-blog mt-3">
            <a class="bolX text-normal" href="{{ $post->path() }}">{{ $post->title }}</a>
        </h3>
        <div class="row-link w-full mt-5 flex justify-end">
            <a href="{{ $post->path() }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="8"
                     viewBox="0 0 28.889 12.382">
                    <path id="fi-rr-arrow-alt-left"
                          d="M27.686,11.844H7.222V7.8A.954.954,0,0,0,5.6,7.134L.279,12.383a.931.931,0,0,0,0,1.329L5.6,18.962A.954.954,0,0,0,7.222,18.3V14.252H27.686a1.2,1.2,0,1,0,0-2.407Z"
                          transform="translate(0 -6.857)" fill="#808285"/>
                </svg>

            </a>
        </div>
    </div>
</div>
