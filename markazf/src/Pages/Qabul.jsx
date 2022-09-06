import { useEffect, useState } from "react";
import { http } from "../ExtraFunctions";

export default function Qabul() {
  const [productName, setProductName] = useState("");
  const [color, setColor] = useState("");
  const [category, setCategory] = useState("");
  const [price, setPrice] = useState("");
  const [qabuls, setQabuls] = useState([]);
  const putData = () => {
    // http.post()
  };

  useEffect(() => {
    http.get("/qabuls").then((res) => {
      console.log(res.data);
      setQabuls(res.data);
    });
  }, []);

  return (
    <div className="content">
      <section className="con-md m-10 bg-slate-500 p-4 rounded-md " id="qabul">
        <form>
          <div className="grid grid-cols-2 gap-4 md:grid-cols-2 sm:grid-cols-1 xs:grid-cols-1">
            <div className="mb-6">
              <label
                for="text"
                className="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
              >
                Mahsulot nomini kiriting
              </label>
              <input
                type="text"
                onChange={(e) => setProductName(e.target.value)}
                value={productName}
                className="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Mahsulot nomini kiriting"
                required
              />
            </div>
            <div className="mb-6">
              <label
                for="text"
                className="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
              >
                Rangini kiriting
              </label>
              <input
                type="text"
                onChange={(e) => setColor(e.target.value)}
                value={color}
                className="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Rangini kiriting"
              />
            </div>
            <div className="mb-6 ">
              <label
                for="text"
                className="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
              >
                Ketegoriyasini kiriting
              </label>
              <input
                type="text"
                onChange={(e) => setCategory(e.target.value)}
                value={category}
                className="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Ketegoriyasini kiriting"
                required
              />
            </div>
            <div className="mb-6 ">
              <label
                for="text"
                className="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
              >
                Narxini kiriting
              </label>
              <input
                type="text"
                onChange={(e) => setPrice(e.target.value)}
                value={price}
                className="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Narxini kiriting"
                required
              />
            </div>
          </div>
          <button
            type="submit"
            className="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
          >
            Submit
          </button>
        </form>
      </section>

      <section className="con-md m-10 " id="list-pupils">
        <div className="overflow-x-auto relative">
          <table className="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead className="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
              <tr>
                <th scope="col" className="py-3 px-6">
                  Product name
                </th>
                <th scope="col" className="py-3 px-6">
                  Color
                </th>
                <th scope="col" className="py-3 px-6">
                  Category
                </th>
                <th scope="col" className="py-3 px-6">
                  Price
                </th>
              </tr>
            </thead>
            <tbody>
              <tr className="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th
                  scope="row"
                  className="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                >
                  Apple MacBook Pro 17"
                </th>
                <td className="py-4 px-6">Sliver</td>
                <td className="py-4 px-6">Laptop</td>
                <td className="py-4 px-6">$2999</td>
              </tr>
            </tbody>
          </table>
        </div>
      </section>
    </div>
  );
}
