<!-- Left sidebar -->
<div class="email-leftbar card">
    <div class="mail-list mt-4">
        <a href="" class="active">
            <i class="mdi mdi-star-outline me-2"></i>
            Profile</a>
        <a href="{{ route('student_profile.activity') }}">
            <i class="mdi mdi-email-outline me-2"></i>
            Activity</a>
        <a href="{{ route('student_profile.mitp', $id) }}">
            <i class="mdi mdi-diamond-stone me-2"></i>
            MITP</a>
        <a href="{{ route('student_profile.itp', $id) }}">
            <i class="mdi mdi-file-outline me-2"></i>
            <span class="ms-1 float-end"></span> ITP</a>
        <a href="{{ route('student_profile.messages') }}">
            <i class="mdi mdi-email-check-outline me-2"></i>
            Messages</a>
        <a href="{{ route('student_profile.other_courses') }}">
            <i class="mdi mdi-trash-can-outline me-2"></i>
            Other Courses</a>
        <a href="{{ route('student_profile.my_student') }}">
            <i class="mdi mdi-trash-can-outline me-2"></i>
            My Students</a>
        <a href="{{ route('student_profile.itp_evaluation') }}">
            <i class="mdi mdi-trash-can-outline me-2"></i>
            ITP
            Evaluation</a>
        <a href="{{ route('student_profile.previous_itp_evaluation') }}">
            <i class="mdi mdi-trash-can-outline me-2"></i>
            Previous ITP Evaluation</a>
        <a href="{{ route('student_profile.vocational_trade_score') }}">

            <i class="mdi mdi-trash-can-outline me-2"></i>
            Vocatonal Trade Score</a>
    </div>
</div>
<!-- End Left sidebar -->