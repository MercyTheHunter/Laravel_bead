
                <table>
                    <thead>
                        <tr>
                            <th> Tantárgy:</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        @foreach ($lesson as $sor)
                            <th><a href="/liststudents/{{$sor->SubjectID}}"></a></th>
                        @endforeach
                        </tr>
                    </tbody>
                </table>
