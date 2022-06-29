<x-app>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title pull-left"> Contact Us Table</h4>
                {{-- <a href="{{route('about.create')}}" class="btn btn-primary btn-round text-white pull-right">
                Add About Us
                </a> --}}
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table" id="table">
                        <thead class=" text-primary">
                            <tr>
                                <th>Name</th>
                                <th>Eamil</th>
                                <th>Message</th>
                                <th>Posted at</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($contacts as $contact)
                            <tr>
                                <td>{{$contact->name}}</td>
                                <td>{{$contact->email}}</td>
                                <td>{{$contact->message}}</td>
                                <td>{{$contact->created_at->diffForHumans()}}</td>
                                <td width="7%">
                                    <form method="POST" action="{{ route('contact.destroy', $contact->id) }}" class="pull-left mr-4">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                    {{-- <a href="{{route('contact.edit' , $contact->id)}}" class="btn btn-success btn-sm">
                                    <i class="fa fa-edit"></i>
                                    </a> --}}
                                </td>
                            </tr>
                            @empty
                            @endforelse

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app>
