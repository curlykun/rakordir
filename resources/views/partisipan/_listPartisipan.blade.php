<ol style="font-weight: bold">
    @foreach ($users as $item)
        <li>
            @can('delete partisipans')
                @if ( $username == Auth::user()->username )
                    <button class="btn btn-danger btn-sm my-1" data-toggle="modal" data-target=".partisipan{{$id}}{{$item['id']}}">
                        <i class="fa fa-times-circle"></i>
                    </button>
                @endif
                <div  id="modal-delete" class="modal partisipan{{$id}}{{$item['id']}}"  data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-sm ">
                        <div class="modal-content">

                            <div class="modal-header">
                                <h5 class="modal-title">Hapus Partisipan {{ ucfirst($item['name']) }} ?</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                            <div class="modal-body">
                                <form action="{{ route('partisipan.destroy',$id.'-'.$item['id']) }}" method="post" class="d-flex justify-content-center">
                                    {{ method_field('DELETE') }}
                                    @csrf
                                    <button class="btn btn-primary btn-sm mr-1" type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <i class="fa fa-refresh"></i>
                                        TIDAK
                                    </button>
                                    <button class="btn btn-outline-danger btn-sm ml-1">
                                        <i class="fa fa-remove"></i>
                                        YA
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endcan
            {{ ucfirst($item['name']) }}
        </li>
    @endforeach
</ol>
