<link rel="icon" type="image/x-icon" href="assets/favicon.ico" wfd-invisible="true">
<!-- Bootstrap icons-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" wfd-invisible="true">
<!-- Core theme CSS (includes Bootstrap)-->
<link href="/css/styles.css" rel="stylesheet" wfd-invisible="true">
<div class="table-container">
                <h2 style="color: black ;">Done Rewiew List</h2>
                @if($submissionInfo)
                <table>
                    <th>
                        Submission Code<br>
                    </th>
                    <th>
                        Submission Title<br>
                    </th>
                    <th>
                        Submission Type<br>
                    </th>
                    <th>
                        Sub Theme<br>
                    </th>
                    <th>
                        Present Mode<br>
                    </th>
                    <th>    
                        Download<br>
                    </th>
                    @foreach($submissionInfo as $submissionInfo)
                        @if($submissionInfo->reviewStatus == 'done')
                        <tr>
                            <td>{{ $submissionInfo->submissionCode }}</td>
                            <td>{{ $submissionInfo->submissionTitle }}</td>
                            <td>{{ $submissionInfo->submissionType }}</td>
                            <td>{{ $submissionInfo->subTheme }}</td>
                            <td>{{ $submissionInfo->presentMode }}</td>
                            <td><a href="{{ route('downloadReviewedFile', ['filename' => $submissionInfo->returnPaperLink]) }}" class="btn btn-primary mb-4">Download</a></td>
                        </tr>
                        @endif
                    @endforeach
                    
                </table>
                    @else
                        <p style="color: black;">No record found.</p>
                    @endif
            </div>