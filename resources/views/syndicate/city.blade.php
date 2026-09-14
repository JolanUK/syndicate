<x-layouts::app :title="__('Dashboard')">
    <div class="flex h-full w-full flex-1 flex-col rounded-xl">
        <div class="relative h-full flex-1 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
            <script src="https://unpkg.com/deck.gl@latest/dist.min.js"></script>
            <!-- optional if maplibre base map is needed -->
            <script src="https://unpkg.com/maplibre-gl@3.0.0/dist/maplibre-gl.js"></script>
            <link href="https://unpkg.com/maplibre-gl@3.0.0/dist/maplibre-gl.css" rel="stylesheet" />

            <script type="module">
                //This example renders a scatterplot with DeckGL, on top of a basemap rendered with maplibre-gl, using a map style JSON from Carto.
                const {DeckGL, ScatterplotLayer} = deck;

                const DATA_URL = {
                    BUILDINGS: 'https://raw.githubusercontent.com/visgl/deck.gl-data/master/examples/trips/buildings.json', // eslint-disable-line
                    TRIPS: 'https://raw.githubusercontent.com/visgl/deck.gl-data/master/examples/trips/trips-v7.json' // eslint-disable-line
                };

                const bounds = [
                    [-123, 37], // South west corner
                    [-122, 38]  // North east corner
                ];

                function applyViewStateConstraints(viewState) {
                    return {
                        ...viewState,
                        longitude: Math.min(bounds[1][0], Math.max(bounds[0][0], viewState.longitude)),
                        latitude: Math.min(bounds[1][1], Math.max(bounds[0][1], viewState.latitude))
                    };
                }

                new DeckGL({
                    mapStyle: 'https://basemaps.cartocdn.com/gl/dark-matter-nolabels-gl-style/style.json',
                    theme: {
                        buildingColor: [74, 80, 87],
                        trailColor0: [253, 128, 93],
                        trailColor1: [23, 184, 190],
                        material: {
                            ambient: 0.1,
                            diffuse: 0.6,
                            shininess: 32,
                            specularColor: [60, 64, 70]
                        },
                    },
                    initialViewState: {
                        longitude: -122.4,
                        latitude: 37.8,
                        minZoom: 14,
                        maxZoom: 16,
                        zoom: 15,
                        pitch: 45,
                        bearing: 0
                    },
                    controller: true,
                    onViewStateChange: ({viewState}) => applyViewStateConstraints(viewState),
                    layers: [
                        new ScatterplotLayer({
                            data: [
                                {position: [-122.45, 37.8], color: [255, 0, 0], radius: 100}
                            ],
                            pickable: true,
                            getPosition: d => d.position,
                            getFillColor: d => d.color,
                            getRadius: d => d.radius,
                            onClick: (info, event) => console.log('Clicked:', info, event)
                        })
                    ]
                });
            </script>

        </div>
    </div>
</x-layouts::app>
