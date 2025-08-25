<?php

namespace App\Livewire\Admin;

use App\Models\User;
use App\Models\Role;
use Livewire\Component;
use Livewire\WithPagination;

class ManageUser extends Component
{
    use WithPagination;

    public $name;
    public $email;
    public $password;
    public $role_id;
    public $is_active = true;
    public $editingUserId = null;
    public $search = '';
    public $roleFilter = '';
    public $phone;
    public $state;
    public $email_verified_at;
    public $roles;
    public $states = [
        "Abia",
        "Adamawa",
        "Akwa Ibom",
        "Anambra",
        "Bauchi",
        "Bayelsa",
        "Benue",
        "Borno",
        "Cross River",
        "Delta",
        "Ebonyi",
        "Edo",
        "Ekiti",
        "Enugu",
        "FCT",
        "Gombe",
        "Imo",
        "Jigawa",
        "Kaduna",
        "Kano",
        "Katsina",
        "Kebbi",
        "Kogi",
        "Kwara",
        "Lagos",
        "Nasarawa",
        "Niger",
        "Ogun",
        "Ondo",
        "Osun",
        "Oyo",
        "Plateau",
        "Rivers",
        "Sokoto",
        "Taraba",
        "Yobe",
        "Zamfara"
    ];

    protected $rules = [
        'name' => 'required|min:3',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:6',
        'role_id' => 'required|exists:roles,id',
        'is_active' => 'boolean',
        'phone' => 'required|string|unique:users,phone|digits:11',
        'state' => 'required|string|max:100'
    ];

    public function mount()
    {
        $this->roles = Role::all();
        // $this->role_id = Role::where('slug', 'dsp')->first()->id;
        $this->resetForm();
    }

    public function resetForm()
    {
        $this->reset(['name', 'email', 'role_id', 'password', 'is_active', 'phone', 'state']);
        $this->editingUserId = null;
    }

    public function createUser()
    {
        $this->validate();

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password),
            'role_id' => $this->role_id,
            'is_active' => $this->is_active,
            'phone' => $this->phone,
            'state' => $this->state
        ]);

        $this->reset(['name', 'email', 'password', 'role_id', 'is_active', 'phone', 'state']);
        session()->flash('message', 'DSP account created successfully.');
    }

    public function editUser($userId)
    {
        $user = User::find($userId);
        $this->editingUserId = $user->id;
        $this->name = $user->name;
        $this->email = $user->email;
        $this->role_id = $user->role_id;
        $this->is_active = $user->is_active;
        $this->phone = $user->phone;
        $this->state = $user->state;
    }

    public function updateUser()
    {
        $rules = [
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users,email,' . $this->editingUserId,
            'role_id' => 'required|exists:roles,id',
            'is_active' => 'boolean',
            'phone' => 'nullable|string|max:20',
            'state' => 'nullable|string|max:100'
        ];

        if ($this->password) {
            $rules['password'] = 'min:6';
        }

        $this->validate($rules);

        $user = User::find($this->editingUserId);
        $user->update([
            'name' => $this->name,
            'email' => $this->email,
            'role_id' => $this->role_id,
            'is_active' => $this->is_active,
            'phone' => $this->phone,
            'state' => $this->state
        ]);

        if ($this->password) {
            $user->update(['password' => bcrypt($this->password)]);
        }

        $this->reset(['name', 'email', 'password', 'role_id', 'is_active', 'editingUserId', 'phone', 'state']);
        session()->flash('message', 'DSP account updated successfully.');
    }

    public function toggleStatus($userId)
    {
        $user = User::find($userId);
        $user->is_active = !$user->is_active;
        $user->save();
        session()->flash('message', 'DSP account status updated successfully.');
    }

    public function render()
    {
        $roleIds = Role::whereIn('slug', ['dsp', 'dtc', 'user'])->pluck('id');

        $users = User::whereIn('role_id', $roleIds)
            ->when($this->search, function ($query) {
                $query->where(function ($q) {
                    $q->where('name', 'like', '%' . $this->search . '%')
                        ->orWhere('email', 'like', '%' . $this->search . '%');
                });
            })
            ->when($this->roleFilter, function ($query) {
                $query->where('role_id', $this->roleFilter);
            })
            ->paginate(10);

        return view('livewire.admin.manage-user', [
            'users' => $users,
            'roles' => $this->roles
        ]);
    }
}
