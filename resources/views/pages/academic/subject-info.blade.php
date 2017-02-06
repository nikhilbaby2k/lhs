<div style="margin-left: 150px;">

    <label for="subject_name">Subject</label>
    <div id="subject_name">{{$subject_details['subject_name']}}</div>
    <ul>
        @foreach($subject_details['topics'] as $topic_id => $topic_details)

            <label for="topic_info">Topics Included in Subject :<b>{{$subject_details['subject_name']}}</b></label>
            <div id="topic_info"></div>
            <li>
                <div id="topic_name">{{$topic_details['topic_name']}} : {{$topic_details['topic_detail']}}</div>

                <div>Chapters Included in Topic: <b>{{$topic_details['topic_name']}}</b></div>
                <ul>
                    @foreach($topic_details['chapters'] as $chapters_id => $chapters_details)
                        <li>
                            <div id="chapter_name">{{$chapters_details['chapter_name']}} : {{$chapters_details['chapter_detail']}}</div>
                        </li>
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ul>

</div>