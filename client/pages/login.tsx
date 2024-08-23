import Image from "next/image"

export default function Login() {
    return (
        <main className="bg-[#f2f4f7] h-screen">
            <div className="flex items-center justify-center">
                <div className="">
                    <Image src="https://static.xx.fbcdn.net/rsrc.php/y1/r/4lCu2zih0ca.svg" alt="logo"  width={320} height={106}/>
                    <h2 className="font-semibold text-[28px] w-[700px] ml-[30px]">Facebook helps you connect and share with the people in your life.</h2>
                </div>
            </div>
        </main>
    )
}