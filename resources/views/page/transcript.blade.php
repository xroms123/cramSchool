@extends('layout.layout')

@section('content')
<form id = "transcript_filter">

    <!-- Level 1 Teacher -->
    <select name="teacher" id="teacher">
        <option value="">Teacher</option>
        @for($i = 0; $i < count($teacher_list); $i++)
            <option value={{$teacher_list[$i]}}>
                {{ $teacher_list[$i] }}
            </option>
        @endfor
    </select>

    <!-- Level 2 Class -->
    <select name="class" id="class">
        <option value="">Class</option>
    </select>

    <!-- Level 3 Student -->
    <select name="student" id="student">
        <option value="">Student</option>
    </select>

    <!-- Level 4 Subject -->
    <select name="subject" id="subject">
        <option value="">Subject</option>
    </select>

</form>
@endsection

@section('footer_js')
    <script>
        let filter = [];
        let sendData = {};

        // teacher select
        $('#teacher').change(function(){
            // 每選擇一層就把欄位鎖住
            $('#teacher').attr('disabled', true);

            // 設定要搜尋的欄位及資料
            let data = {
                item : 'teacher',
                value : $('#teacher').val()
            }
            filter.push(data);
            sendData.nextLevel = 'class';
            sendData.filter = filter;

            // 使用ajax到controller做資料庫篩選
            $.post('/class/update/dropdown',sendData,function(result){

                // 將回傳後的選項增加到 select 下面
                for(let i in result){
                    let element = `<option value = ${result[i]} > ${result[i]} </option>`
                    $('#class').append(element);
                }

                // 可以打開chrome開發工具點選console 看回傳的資料內容
                console.log(result);
            })
        })

        // class select
        $('#class').change(function(){
            $('#class').attr('disabled', true);
            let data = {
                item : 'class',
                value : $('#class').val()
            }
            filter.push(data);
            sendData.nextLevel = 'student';
            sendData.filter = filter;
            $.post('/class/update/dropdown',sendData,function(result){
                for(let i in result){
                    let element = `<option value = ${result[i]} > ${result[i]} </option>`
                    $('#student').append(element);
                }
            })
        })

        // student select
        $('#student').change(function(){
            $('#student').attr('disabled', true);
            let data = {
                item : 'student',
                value : $('#student').val()
            }
            filter.push(data);
            sendData.nextLevel = 'subject';
            sendData.filter = filter;
            $.post('/class/update/dropdown',sendData,function(result){
                for(let i in result){
                    let element = `<option value = ${result[i]} > ${result[i]} </option>`
                    $('#subject').append(element);
                }
            })
        })
    </script>
@endsection
