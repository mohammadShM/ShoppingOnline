@extends('admin.layouts.app')
@section('content')
    <div class="main-content padding-0 categories">
        <div class="row no-gutters  ">
            <div class="col-8 margin-left-10 margin-bottom-15 border-radius-3">
                <p class="box__title">کد های تخفیف</p>
                <div class="table__box">
                    <table class="table">
                        <thead role="rowgroup">
                        <tr role="row" class="title-row">
                            <th>شناسه</th>
                            <th>کد تخفیف</th>
                            <th>تاریخ شروع</th>
                            <th>تاریخ پایان</th>
                            <th>ویرایش</th>
                            <th>حذف</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($offers as $offer)
                            <tr role="row" class="">
                                <td><a href="">{{$offer->id}}</a></td>
                                <td><a href="">{{$offer->code}}</a></td>
                                <td><a href="">{{verta()->instance($offer->start_at)->format('Y-n-j')}}</a></td>
                                <td><a href="">{{verta()->instance($offer->end_at)->format('Y-n-j')}}</a></td>
                                <td>
                                    <a href="{{route('offer.edit',$offer)}}" class="item-edit" title="ویرایش"></a>
                                </td>
                                <td>
                                    <form action="{{route('offer.destroy',$offer)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="item-delete bg-white button-cursor" title="حذف"></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            @include('admin.offers.create')
        </div>
    </div>
@endsection
