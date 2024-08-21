import { FaFacebook } from "react-icons/fa";
import Combobox from "./Combobox"
export default function Header() {
    return (
      <header className="mx-3 flex items-center">
        <FaFacebook className="text-4xl text-blue-600"/>
        <Combobox/>
      </header>
    )
  }