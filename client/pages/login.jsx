"use client";
import Image from "next/image";
import { FaRegEye } from "react-icons/fa6";
import { FaRegEyeSlash } from "react-icons/fa";
import { useContext, useState } from "react";
import Register from "./components/Register";
import { AuthContext } from "./context/authContext";
import { useRouter } from "next/navigation";

export default function Login() {
  const [passwordVisible, setPasswordVisible] = useState(false);
  const [showRegisterModel, setShowRegisterModel] = useState(true);
  const [inputs, setInputs] = useState({
    email: "",
    password: "",
  });
  const [err, setErr] = useState(null);

  const navigate = useRouter();

  const handleChange = (e) => {
    setInputs((prev) => ({ ...prev, [e.target.name]: e.target.value }));
  };

  const togglePasswordVisibility = () => {
    setPasswordVisible(!passwordVisible);
  };

  const toggleRegisterModel = () => {
    setShowRegisterModel(!showRegisterModel);
  };

  const { login } = useContext(AuthContext);

  const handleLogin = async (e) => {
    e.preventDefault();
    try {
      await login(inputs);
      navigate.push("/");
    } catch (err) {
      setErr(err.response ? err.response.data : "An unexpected error occurred");
    }
  };

  return (
    <main className="bg-[#f2f4f7] h-screen relative">
      {showRegisterModel ? null : (
        <Register
          showRegisterModel={showRegisterModel}
          setShowRegisterModel={setShowRegisterModel}
        />
      )}
      <div className="flex items-center justify-center translate-y-36">
        <div className="">
          <Image
            fetchPriority="high"
            src="https://static.xx.fbcdn.net/rsrc.php/y1/r/4lCu2zih0ca.svg"
            alt="logo"
            width={320}
            height={106}
          />
          <h2 className="font-semibold text-[28px] w-[700px] ml-[30px]">
            Facebook giúp bạn kết nối và chia sẻ với mọi người trong cuộc sống
            của bạn.
          </h2>
        </div>
        <form
          action=""
          className="w-[396px] h-[315px] bg-white p-3 boxshow-custom rounded-[10px] translate-y-[40px] mx-5"
        >
          <input
            onChange={handleChange}
            className="p-3 border border-gray-200 w-full my-2"
            type="email"
            placeholder="Email hoặc số điện thoại"
            name="email"
          />
          <div className="relative">
            <input
              onChange={handleChange}
              className="p-3 border border-gray-200 w-full my-2"
              type={passwordVisible ? "text" : "password"}
              placeholder="Mật khẩu"
              name="password"
            />
            <div
              onClick={togglePasswordVisibility}
              className="absolute right-3 top-6 text-[18px] cursor-pointer"
            >
              {passwordVisible ? <FaRegEyeSlash /> : <FaRegEye />}
            </div>
          </div>
          {/* {err & err} */}
          <button
            onClick={handleLogin}
            className="w-full bg-blue-500 text-white p-3 my-2 font-bold text-[20px] cursor-pointer rounded-md hover:opacity-95 transition-colors"
          >
            Đăng nhập
          </button>
          <div
            onClick={toggleRegisterModel}
            className="translate-x-[110px] text-center my-2"
          >
            <div className="bg-[#42b72a] text-white p-3 cursor-pointer rounded-md hover:opacity-95 transition-colors w-[160px]">
              Tạo tài khoản mới
            </div>
          </div>
        </form>
      </div>
    </main>
  );
}
