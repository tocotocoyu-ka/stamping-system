@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="css/record.css">
@endsection

@section('content')
<div class="record__content">
    <div class="record__heading">
        <div class="record__button">
            <button class="record__button-previous" type="submit">＜</button>
        </div>
            <div class="heading__logo">
                <h2>dateサンプル</h2>
            </div>
            <div class="record__button">
                <button class="record__button-following" type="submit">＞</button>
            </div>
        </div>
        <form class="form">
            <div class="record-table">
                <table class="record-table__inner">
                    <tr class="record-table__row">
                        <th class="record-table__header">名前</th>
                        <th class="record-table__header">勤務開始</th>
                        <th class="record-table__header">勤務終了</th>
                        <th class="record-table__header">休憩時間</th>
                        <th class="record-table__header">勤務時間</th>
                    </tr>
                    @foreach ($creates as $create), ($stamps as $stamp), ($intermissions as $intermission)
                    <tr class="record-table__row">
                        <td class="record-table__item">
                            {{$create->name}}
                        </td>
                        <td class="record-table__item">
                            {{$stamp->started_at}}
                        </td>
                        <td class="record-table__item">
                            {{$stamp->ended_at}}
                        </td>
                        <td class="record-table__item">
                            {{$intermission->started_at}}
                        </td>
                        <td class="record-table__item">
                            {{$intermission->ended_at}}
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </form>
    </div>
</div>
@endsection