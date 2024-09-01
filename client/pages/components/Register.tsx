import axios from "axios";
import { useState } from "react";
import { IoCloseSharp } from "react-icons/io5";

type RegisterProps = {
  showRegisterModel: boolean;
  setShowRegisterModel: React.Dispatch<React.SetStateAction<boolean>>;
};

const Register: React.FC<RegisterProps> = ({
  showRegisterModel,
  setShowRegisterModel,
}) => {
  const [inputs, setInputs] = useState({
    email: "",
    password: "",
    first_name: "",
    last_name: "",
  });
  const [err, setErr] = useState(null);

  const handleChange = (e: React.ChangeEvent<HTMLInputElement>) => {
    setInputs((prev) => ({ ...prev, [e.target.name]: e.target.value }));
  };

  const handleClick = async (e: React.MouseEvent<HTMLDivElement>) => {
    e.preventDefault();
    try {
      await axios.post("http://localhost:8080/api/auth/register", inputs);
    } catch (err: any) {
      setErr(err.response.data);
    }
  };

  const toggleRegisterModel = () => {
    setShowRegisterModel(!showRegisterModel);
  };

  return (
    <div>
      <div className="absolute z-20 bg-white w-full h-full opacity-50"></div>
      <div className="flex justify-center">
        <form
          action=""
          className="absolute z-30 boxshow-custom py-3 px-5 w-[432px] opacity-100 bg-white translate-y-52"
        >
          <IoCloseSharp
            onClick={toggleRegisterModel}
            className="absolute right-0 text-[30px] font-bold cursor-pointer mr-2"
          />
          <h1 className="text-[32px] font-bold">Đăng ký</h1>
          <div>Nhanh chóng và dễ dàng.</div>
          <div className="flex justify-center items-center my-2">
            <input
              className="rounded-lg p-2 border border-gray-200"
              type="text"
              placeholder="Họ"
              name="first_name"
              onChange={handleChange}
            />
            <input
              className="rounded-lg p-2 border border-gray-200"
              type="text"
              placeholder="Tên"
              name="last_name"
              onChange={handleChange}
            />
          </div>
          <div className="my-2">
            <input
              className="rounded-lg p-2 w-full my-1 border border-gray-200"
              type="email"
              placeholder="Số điện thoại hoặc email"
              name="email"
              onChange={handleChange}
            />
            <input
              className="rounded-lg p-2 w-full my-1 border border-gray-200"
              type="text"
              placeholder="Mật Khẩu mới"
              name="password"
              onChange={handleChange}
            />
          </div>
          <div
            onClick={handleClick}
            className="bg-[#42b72a] text-center text-white p-3 cursor-pointer rounded-md hover:opacity-95 transition-colors w-[130px] translate-x-32"
          >
            Đăng ký
          </div>
        </form>
      </div>
    </div>
  );
};
export default Register;
