import { IoCloseSharp } from "react-icons/io5";

type RegisterProps = {
  showRegisterModel: boolean;
  setShowRegisterModel: React.Dispatch<React.SetStateAction<boolean>>;
};

const Register: React.FC<RegisterProps> = ({
  showRegisterModel,
  setShowRegisterModel,
}) => {
  return (
    <div>
      <div className="absolute z-20 bg-white w-full h-full opacity-50"></div>
      <div className="flex justify-center">
        <form
          action=""
          className="absolute z-30 boxshow-custom py-3 px-5 w-[432px]"
        >
          <IoCloseSharp className="absolute right-0 text-[30px] font-bold cursor-pointer mr-2" />
          <h1 className="text-[32px] font-bold">Đăng ký</h1>
          <div>Nhanh chóng và dễ dàng.</div>
        </form>
      </div>
    </div>
  );
};
export default Register;
