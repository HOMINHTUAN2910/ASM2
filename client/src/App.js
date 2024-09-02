import "./App.css";

function App() {
  const get = async () => {
    const res = await fetch("http://localhost:8000");
    console.log(res);
  }
  get()
  return (
    <main>
      <h1 className="text-3xl font-bold underline">Hello world!</h1>
    </main>
  );
}

export default App;
