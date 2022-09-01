import { configureStore } from "@reduxjs/toolkit";
import TestSlice from "./slices/TestSlice";

export const store = configureStore({
  reducer: {
    TestSlice,
  },
  middleware: (getDefaultMiddleware) => getDefaultMiddleware(),
  devTools: process.env.NODE_ENV !== "production",
});
