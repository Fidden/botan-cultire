import {BaseModel} from "@/models/base.model.js";
import {useStore} from "pinia-class-store";

class BookModel extends BaseModel {
    constructor() {
        super();
        this.book = undefined;
    }

    init(book) {
        this.book = book;
    }
}

export const bookModel = useStore.bind(undefined, BookModel);
