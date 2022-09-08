import { useEffect, useState } from "react";
import axios from "../api/axios";
import Input from "react-phone-number-input/input";
// https://youtu.be/fosiUSC3ZJo
export default function Qabul() {
  const [name, setName] = useState("");
  const [tel1, setTel1] = useState("");
  const [tel2, setTel2] = useState(null);
  const [kurs, setKurs] = useState(1);
  const [vaqt, setVaqt] = useState(0);

  const [qabuls, setQabuls] = useState([]);
  useEffect(() => {
    const getQabulFunc = async () => {
      try {
        const response = await axios.get("http://127.0.0.1:8000/api/qabul");
        console.log(response);
      } catch (error) {
        console.log(error);
      }
    };
    getQabulFunc();
    // axios
    //   .get(`http://127.0.0.1:8000/api/qabul`)
    //   .then((data) => data.json())
    //   .then((res) => console.log(res.data))
    //   .catch(function (error) {
    //     console.log(error);
    //   });
  }, []);

  const newQabul = (e) => {
    e.preventDefault();
    axios
      .post(`http://127.0.0.1:8000/api/qabul`, {
        name,
        tel1,
        tel2,
        kurs,
        vaqt,
      })
      .then((res) => {
        res.json().then((resp) => {
          console.log(resp);
        });
      });
  };

  return (
    <>
      <section className="con-md m-10 bg-slate-500 p-4 rounded-md " id="qabul">
        <form onSubmit={newQabul} className="grid">
          <div className="m-4 grid-cols-6  ">
            <label
              for="text"
              className="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
            >
              Ism kiriting
            </label>
            <input
              type="text"
              onChange={(e) => setName(e.target.value)}
              className="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
              placeholder="Ism yozing"
              required=""
            />
          </div>
          <div className="m-4 grid-cols-6  ">
            <label
              for="tel1"
              className="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
            >
              1-telefon raqam
            </label>
            <div className="flex">
              <span className="mt-2 mr-2">+998</span>
              <Input
                international
                countryCallingCodeEditable={false}
                defaultCountry="UZ"
                placeholder="1-telefon raqamni kiriting"
                required
                value={tel1}
                onChange={setTel1}
                className="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
              />
            </div>
          </div>
          <div className="m-4 grid-cols-6  ">
            <label
              for="tel2"
              className="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
            >
              2-telefon raqam
            </label>
            <div className="flex">
              <span className="mt-2 mr-2">+998</span>
              <Input
                international
                countryCallingCodeEditable={false}
                defaultCountry="UZ"
                className="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="2-telefon raqamni kiriting"
                required=""
                value={tel2}
                onChange={setTel2}
              />
            </div>
          </div>
          <div className="flex justify-between">
            <div className="m-4 w-full ">
              <label
                for="kurs"
                className="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
              >
                Kursni tanlang
              </label>
              <select
                className="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                onChange={(e) => setKurs(e.target.value)}
              >
                <option value="1"> - - - </option>
                <option value="1">Dasturlash</option>
                <option value="2">Ingliz tili</option>
              </select>
            </div>
            <div className="m-4 w-full ">
              <label
                for="kurs"
                className="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
              >
                Kurs vaqti
              </label>
              <select
                onChange={(e) => setVaqt(e.target.value)}
                className="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
              >
                <option value="0">- - -</option>
                <option value="0">Farqi yo'q</option>
                <option value="1">Abetdan oldin</option>
                <option value="2">Abetdan keyin</option>
              </select>
            </div>
          </div>
          <button
            type="submit"
            className="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
          >
            Qo'shish
          </button>
        </form>
      </section>
    </>
  );
}
