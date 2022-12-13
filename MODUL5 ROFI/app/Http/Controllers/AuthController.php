    <?php

    namespace App\Http\Controllers;

    // use App\Models\User;

    use App\Models\User;
    use Illuminate\Http\Response;
    use Illuminate\Support\Str;
    use Illuminate\Http\Request;
    use App\Models\Auth as ModelsAuth;
    use Illuminate\Support\Facades\DB;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Hash;
    use Illuminate\Validation\ValidationException;

    class AuthController extends Controller
    {
        public function register( )
        {
            return view("auth.Regist-Rofi");
        }

        public function regist_user( Request $request )
        {

            $this->validate($request, [
                'password' => 'required|confirmed|min:5'
            ]);

            ModelsAuth::create([
                'name' => $request->name,
                'no_hp' => $request->no_hp,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'remember_token' => Str::random(60)
            ]);

            return redirect("/")->with('berhasilDaftar', 'Akunmu Berhasil Di Buat :D');
        }

        public function login_page()
        {
            return view("auth.Login-Rofi");
        }

        public function login_store( Request $request )
        {
            if ( Auth::attempt($request->only("email", "password")) ) {

                $second = 1;
                $response = new Response(redirect("/home")->with('berhasilLogin', 'Login Berhasil Di Lakukan'));
                if ( $request->has("remember") ) {
                    $response->withCookie(cookie('1202204108', 'Rofi', $second));
                    return $response;

                } else {
                    return redirect("/home")->with('berhasilLogin', 'Login Berhasil Di Lakukan');
                }

            } else {
                return redirect("/auth/login")->with("wrong","Email dan Password ada yang Salah");
            }
        }

        public function logout()
        {
            Auth::logout();
            return redirect("/auth/login")->with('berhasilLogout', 'Logout Berhasil Di Lakukan');
        }

        public function profile()
        {
            return view("auth.Profile");
        }

        public function update_profile($id, Request $request)
        {
            $this->validate($request, [
                'password' => '|confirmed|min:5'
            ]);

            $name = $request->input('name');
            $no_hp = $request->input('no_hp');
            $password = $request->input('password');
            $password = Hash::make($request->password);

            DB::table('users')
                ->where('id', '=', Auth::user()->id)
                ->update([
                    'name' => $name,
                    'no_hp' => $no_hp,
                    'password' => $password,
            ]);

            if( Hash::check($request->current_password, auth()->user()->password) ) {

                return back()->with("message", "Passwordmu telah diupdate");
                return redirect("/profile")->with('profileUpdate', 'Profile Kamu Sukses Di Update');
            }

            throw ValidationException::withMessages([
                'current_password' => "Passwordmu tidak sesuai dengan milik kita"
            ]);

        }


        public function delete_profile( $id )
        {
            $profile = ModelsAuth::find($id);
            $profile -> delete();
            return redirect("/");
        }
    }
