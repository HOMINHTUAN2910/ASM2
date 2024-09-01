import { Html, Head, Main, NextScript } from "next/document";
import { AuthContextProvider } from "./context/authContext";

export default function Document() {
  return (
    <AuthContextProvider>
      <Html lang="en">
        <Head />
        <body>
          <Main />
          <NextScript />
        </body>
      </Html>
    </AuthContextProvider>
  );
}
