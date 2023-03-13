import FeaturedMovie from "@/Components/FeaturedMovie";
import MovieCard from "@/Components/MovieCard";
import Authenticated from "@/Layouts/Authenticated/Index";
import { Head } from "@inertiajs/react";
import Flickity from "react-flickity-component";

const flickityOption = {
    cellAlign: "left",
    contain: true,
    groupCells: 1,
    wrapAround: false,
    pageDots: false,
    prevNextButtons: false,
    draggable: ">1",
};

export default function Dashboard() {
    return (
        <Authenticated>
            <Head>
                <title>Dashboard</title>

                <link
                    rel="stylesheet"
                    href="https://unpkg.com/flickity@2/dist/flickity.min.css"
                />
            </Head>
            {/* Featured */}
            <div>
                <div className="font-semibold text-[22px] text-black mb-4">
                    Featured Movies
                </div>
                <Flickity className="gap-[30px]" options={flickityOption}>
                    {[1, 2, 3, 4].map((i) => (
                        <FeaturedMovie
                            key={i}
                            slug="the-batman-in-love"
                            name={`The Batman In Love ${i}`}
                            category="Comedy"
                            thumbnail="https://picsum.photos/id/1/300/300"
                            rating={i + 1}
                        />
                    ))}
                </Flickity>
            </div>
            {/* End Featured */}

            {/* <!-- Browse --> */}
            <div className="mt-[50px]">
                <div className="font-semibold text-[22px] text-black mb-4">
                    Browse
                </div>
                <Flickity options={flickityOption}>
                    {/* Movies */}
                    {[1, 2, 3, 4, 5, 6, 7, 8].map((i) => (
                        <MovieCard
                            key={i}
                            slug="meong-golden"
                            name="Meong Golden"
                            category="Horror"
                            thumbnail="https://picsum.photos/id/1/300/300"
                        />
                    ))}

                    {/* End Movies */}
                </Flickity>
            </div>
            {/* <!-- /Continue Watching --> */}
        </Authenticated>
    );
}
