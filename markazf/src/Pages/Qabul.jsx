import { useEffect, useState } from "react";
import axios from "../api/axios";
import Input from "react-phone-number-input/input";

export default function Qabul() {
  const [name, setName] = useState("");
  const [tel1, setTel1] = useState("");
  const [tel2, setTel2] = useState(null);
  const [kurs, setKurs] = useState(1);
  const [vaqt, setVaqt] = useState(0);
  const [izoh, setIzoh] = useState(null);
  const [kurslar, setKurslar] = useState([]);
  const [qabuls, setQabuls] = useState([]);

  useEffect(() => {
    const getQabulFunc = async () => {
      try {
        const response = await axios.get("http://127.0.0.1:8000/api/qabul");
        setQabuls(response.data);
        // console.log(response.data);
      } catch (error) {
        console.log(error);
      }
    };
    getQabulFunc();
    // const getKurslar = async () => {
    //   try {
    //     const response = await axios.get("http://127.0.0.1:8000/api/qabul");
    //     // console.log(response.data);
    //     setKurslar(res.data);
    //   } catch (error) {
    //     console.log(error);
    //   }
    // };
    // getKurslar()
  }, []);
  const newQabul = async (e) => {
    e.preventDefault();
    try {
      fetch(`http://127.0.0.1:8000/api/qabul`, {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({
          name,
          tel1,
          tel2,
          kurs,
          vaqt,
          izoh,
          admin_id: 1,
        }),
      })
        .then((response) => response.json())
        .then((data) => console.log(data));
      // axios
      //   .post(`http://127.0.0.1:8000/api/qabul`, {
      //   name,
      //   tel1,
      //   tel2,
      //   kurs,
      //   vaqt,
      //   izoh,
      //   admin_id: 1,
      // });, {
      //     headers: {
      //       Accept: "application/json",
      //       "Content-Type": "application/json;charset=UTF-8",
      //     },
      //   })
      //   .then(({ data }) => {
      //     console.log(data);
      //   });
      // const res = await axios.post(`http://127.0.0.1:8000/api/qabul`, {
      //   name,
      //   tel1,
      //   tel2,
      //   kurs,
      //   vaqt,
      //   izoh,
      //   admin_id: 1,
      // });
      // console.log(res.data);
    } catch (error) {
      console.log(error);
    }
  };

  return (
    <>
      <section className="con-md m-10 bg-slate-500 p-4 rounded-md " id="qabul">
        <form onSubmit={newQabul} className="grid">
          <div className="m-4 grid-cols-6">
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
                {/* <option value="1"> - - - </option> 
                 {kurslar.map((item) => (
                  <option value={item.id}>{item.k_name}</option>
                ))} */}
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
          <div className="m-4 grid-cols-6">
            <label
              className="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
              htmlFor="textarea"
            >
              Izoh
            </label>
            <textarea
              className="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
              placeholder="Izoh . . . .  . . . . . . . . "
              onChange={(e) => setIzoh(e.target.value)}
            ></textarea>
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
